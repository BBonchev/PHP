<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm(Request $request)
    {
        $errors  = session('form_errors', []);
        $success = session('success_message', '');

        $request->session()->forget('form_errors');
        $request->session()->forget('success_message');

        return view('auth.register', [
            'success' => $success,
            'errors'  => $errors,
        ]);
    }

    public function postRegisterForm(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');

        $errors = User::validate([
            'username' => $username,
            'password' => $password,
        ]);

        if ($errors) {
            session(['form_errors' => $errors]);
            return redirect('register');
        }

        User::create([
            'username' => $username,
            'password' => bcrypt($password),
        ]);

        $user = User::getByName($username);

        $this->login($user['id']);

        session(['success_message' => 'Successfully registered']);

        return redirect('register'); // TODO: books
    }

    public function showLoginForm(Request $request)
    {
        $errors  = session('form_errors', []);
        $success = session('success_message', '');

        $request->session()->forget('form_errors');
        $request->session()->forget('success_message');

        return view('auth.login', [
            'errors'  => $errors,
            'success' => $success,
        ]);
    }

    public function postLoginForm(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');

        $user = User::getByNameAndPassword($username, $password);

        if (!$user) {
            session(['form_errors' => ['No such user']]);
            return redirect('login');
        }

        $this->login($user['id']);

        return redirect('/'); //TODO: books
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user_id');

        return redirect('/');
    }

    protected function login($id)
    {
        session(['user_id' => $id]);
    }
}