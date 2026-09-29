<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HIGHLUXX - Register</title>

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
                    Create <span>Account!</span>
                </h1>

                <p class="subtitle">
                    Register your HIGHLUXX account
                </p>


                 <form action="/register" method="POST">

                    @csrf


                    <div class="input-group">

                        <input
                            type="text"
                            name="name"
                            placeholder="Full Name"
                            required
                        >
                    </div>


                    <div class="input-group">

                        <input
                            type="email"
                            name="email"
                            placeholder="Email Address"
                            required
                        >

                    </div>

                    <div class="input-group">

                        <input
                            type="password"
                            name="password"
                            placeholder="Password"
                            required
                        >
                    </div>

                    <div class="input-group">

                        <input
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirm Password"
                            required
                        >
                    </div>



                    <button
                        type="submit"
                        class="login-btn"
                    >
                        Create Account →
                    </button>
                </form>


                <div class="register-link">

                    <span>Already have an account?</span>

                    <a href="/login">
                        Login
                    </a>
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