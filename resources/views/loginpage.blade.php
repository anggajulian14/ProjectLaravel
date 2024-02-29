@extends('layouts.app')

@section('content')
<div class="login-container">
    <form class="login-form" action="{{ route('login') }}" method="POST">
        @csrf
        <h2>Login</h2>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit">Login</button>
        <p class="forgot-password">Forgot password? <a href="#">Reset here</a></p>
    </form>
</div>
@endsection