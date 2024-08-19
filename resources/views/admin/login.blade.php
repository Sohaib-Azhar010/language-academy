<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Language Academy</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
    <link rel="icon" href="img/favicon.ico">

    <style>
        /* Custom styles for the login page */
        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;

        }

        body {
            background-color: #181d38;
        }

        .login-card {
            display: flex;
            flex-direction: row;
            max-width: 800px;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .login-form {
            padding: 30px;
            flex: 1;
        }

        .login-logo {
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 1;
        }

        .login-logo img {
            max-width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {
            .login-card {
                flex-direction: column;
            }

            .login-logo {
                display: none;
                /* Hide logo on smaller screens */
            }
        }
    </style>
</head>

<body>

    <div class="container login-container">
        <div class="login-card">
            <!-- Login Form -->
            <div class="login-form">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h3 class="mb-4">Login</h3>
                <form action="{{ route('login.check') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>

            <!-- Company Logo -->
            <div class="login-logo">
                <img src="img/logo.png" alt="Company Logo">
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, for additional features) -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

</body>

</html>
