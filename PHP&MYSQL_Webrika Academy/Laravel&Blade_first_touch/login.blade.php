@foreach ($errors as $error)
    <div>
        <p style="color: darkred">{{ $error }}</p>
    </div>
@endforeach

@if ($success)
    <div style="color: darkgreen">{{ $success }}</div>
@endif

<form action="{{ url('login') }}" method="POST">
    {{ csrf_field() }}
    <div>
        <label for="username">
            Username
        </label>
        <input type="text" id="username" name="username" />
    </div>
    <div>
        <label for="password">
            Password
        </label>
        <input type="password" id="password" name="password" />
    </div>
    <div>
        <input type="submit" value="Login" />
    </div>
</form>