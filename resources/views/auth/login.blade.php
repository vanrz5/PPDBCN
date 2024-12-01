<!-- resources/views/auth/login.blade.php -->

@extends('layouts.app')

@section('content')
<div class="form-box">
    <h2>Login</h2>
    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div class="input-box">
            <input type="text" class="input-field" name="email" placeholder="Username or Email" required>
            <i class="bx bx-user"></i>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" name="password" placeholder="Password" required>
            <i class="bx bx-lock-alt"></i>
        </div>
        <div class="input-box">
            <input type="submit" class="submit" value="Sign In">
        </div>
    </form>
</div>
@endsection
