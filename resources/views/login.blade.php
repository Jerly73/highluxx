<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HIGHLUXX - Login</title>

    @vite('resources/css/login.css')

</head>

<body>

    <div class="login-container">



        <div class="left-side">

            <div class="brand-content">

                <div class="logo">
                    <span class="high">HIGH</span><span class="luxx">LUXX</span>
                </div>

                <div class="brand-subtitle">
                    AUTO CARE CENTER
                </div>

                <div class="tagline-small">
                    REDEFINING AUTOMOTIVE PERFORMANCE
                </div>

                <div class="slogan">
                    <p>
                        QUALITY PARTS.<br>
                        SMOOTHER REPAIRS.<br>
                        BETTER DRIVES.
                    </p>
                </div>

            </div>

        </div>


        
        <div class="right-side">

            <div class="login-box">

                <h1 class="welcome-title">
                    Welcome <span>Back!</span>
                </h1>

                <p class="subtitle">
                    Sign in to your account
                </p>


                <form action="/login" method="POST">

                    @csrf

                    

                    <div class="input-group">

                        <span class="input-icon"></span>

                        <input
                            type="email"
                            name="email"
                            placeholder="Email Address"
                            required
                        >

                    </div>


                    

                    <div class="input-group">

                        <span class="input-icon"></span>

                        <input
                            type="password"
                            name="password"
                            placeholder="Password"
                            required
                        >

                    </div>


                    

                    <div class="options">

                        <label class="remember">

                            <input
                                type="checkbox"
                                name="remember"
                            >

                            Remember me

                        </label>
                        
                        <a href="#" class="forgot">
                            Forgot password?
                        </a>
                    </div>
                    
                    

                    <button
                        type="submit"
                        class="login-btn"
                    >
                        Login →
                    </button>
                </form>

                <div class="register-link">
                    <span>Don't have an account?</span>
                    <a href="/register">Create an account</a>
                </div>


                

                <div class="footer">
                    
                    <strong>
                        HIGHLUXX Auto Care Center
                    </strong>

                    <small>
                        © 2025. All rights reserved.
                    </small>
                </div>
            </div>
        </div>
    </div>
</body>
</html>