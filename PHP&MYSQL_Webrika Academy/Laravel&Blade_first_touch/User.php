<?php

namespace App\Models;

use DB;
use Hash;

class User
{
    public static function get(int $id) : array
    {
        $user = DB::select('SELECT * FROM users WHERE id = ?', [$id]);

        if (!$user) {
            return [];
        }

        return current($user);
    }

    public static function create(array $data)
    {
        DB::insert('INSERT INTO users (username, password) VALUES (?, ?)', [
            $data['username'],
            $data['password'],
        ]);
    }

    public static function nameExists(string $username) : bool
    {
        $results = DB::select('SELECT * FROM users WHERE username = ?', [$username]);

        return (bool)$results;
    }

    public static function validate(array $data) : array
    {
        $errors = [];

        if (!mb_strlen($data['username'])) {
            $errors[] = 'Username is required';
        }

        if (!mb_strlen($data['password'])) {
            $errors[] = 'Password is required';
        }

        if (self::nameExists($data['username'])) {
            $errors[] = 'Username is already taken';
        }

        return $errors;
    }

    public static function getByNameAndPassword(string $username, string $password) : array
    {
        $user = DB::select('SELECT * FROM users WHERE username = ?', [$username]);

        if (!$user) {
            return [];
        }

        $user = current($user);

        if (Hash::check($password, $user['password'])) {
            return $user;
        }

        return [];
    }

    public static function getByName(string $username) : array
    {
        $user = DB::select('SELECT * FROM users WHERE username = ?', [$username]);

        if (!$user) {
            return [];
        }

        return current($user);
    }
}