@extends("layouts.master")

@section("head")
    <link href="css/login.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@endsection

@section("title", "Login to ".config("constants.appTitle"))

@section("content")
<div class="login-container">
    <input type="checkbox" id="flip">
    <div class="cover">
        <div class="front">
            <div class="text">
                @if (session()->has('login-success'))
                    @php
                        session()->forget('login-success');
                    @endphp
                    <i class="fas fa-check-square"></i>
                    <span class="text-1">Registered<br>successfully!</span>
                    <span class="text-2">For continue, please log in.</span>
                @elseif(session()->has('login-error'))
                    @php
                        session()->forget('login-error');
                    @endphp
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    <span class="text-1">Login <br>failed!</span>
                    <span class="text-2">Please try again.</span>
                @else
                    <span class="text-1">Every new friend is a <br> new adventure</span>
                    <span class="text-2">Let's get connected</span>
                @endif
            </div>
        </div>
        <div class="back">
            <div class="text">
                <span class="text-1">Complete miles of journey <br> with one step</span>
                <span class="text-2">Let's get started</span>
            </div>
        </div>
    </div>
    <div class="forms">
        <div class="form-content">
            <div class="login-form">
                <div class="title">Login</div>
                <form action="{{ route("user-login") }}" method="POST">
                    @csrf
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input name="email" type="text" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input name="password" type="password" placeholder="Enter your password" required>
                        </div>
                        <div class="text"><a href="#">Forgot password?</a></div>
                        <div class="button input-box">
                            <input name="login" type="submit" value="Login">
                        </div>
                        <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
                    </div>
                </form>
            </div>
            <div class="signup-form">
                <div class="title">Signup</div>
                <form action="{{ route("user-register") }}" method="POST">
                    @csrf
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-user"></i>
                            <input name="name" type="text" placeholder="Enter your name" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input name="email" type="text" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input name="password" type="password" placeholder="Enter your password" required>
                        </div>
                        <div class="button input-box">
                            <input name="register" type="submit" value="Register">
                        </div>
                        <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
