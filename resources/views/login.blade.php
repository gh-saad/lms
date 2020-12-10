@extends('layouts.app')

@section('content')
<div class="login-page-content">
    <div class="login-box">
        <div class="item-logo">
            <img src="{{ URL::asset('assets/img/logo3.png') }}" alt="logo">
        </div>
        <form action="/lar4/public/dashboard" class="login-form">
            <div class="form-group">
                <label>Username</label>
                <input type="text" placeholder="Enter usrename" class="form-control">
                <i class="far fa-envelope"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" placeholder="Enter password" class="form-control">
                <i class="fas fa-lock"></i>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember-me">
                    <label for="remember-me" class="form-check-label">Remember Me</label>
                </div>
                <a href="login.html#" class="forgot-btn">Forgot Password?</a>
            </div>
            <div class="form-group">
                <button type="submit" class="login-btn">Login</button>
            </div>
        </form>
    </div>
    
</div>    
@endsection
