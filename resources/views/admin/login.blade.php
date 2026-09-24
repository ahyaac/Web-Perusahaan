<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Admin</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        /* Background gradient with subtle texture */
        body {
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Overlay pattern using CSS */
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image:
                radial-gradient(circle, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
            pointer-events: none;
            z-index: 0;
        }

        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 30px 35px;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 1;
        }

        .login-container h2 {
            margin-bottom: 25px;
            font-size: 26px;
            text-align: center;
            color: #4b3f72;
            font-weight: 700;
        }

        .login-container .form-label {
            font-size: 15px;
            color: #4b3f72;
            font-weight: 600;
        }

        .login-container .form-control {
            border-radius: 8px;
            border: 1.5px solid #b2a3d9;
            transition: border-color 0.3s ease;
        }

        .login-container .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 8px #667eea88;
            outline: none;
        }

        .login-container .btn-primary {
            width: 100%;
            padding: 10px;
            font-weight: 600;
            background-color: #667eea;
            border: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .login-container .btn-primary:hover {
            background-color: #5a6edb;
        }

        .login-container .error-messages p {
            color: #e74c3c;
            font-size: 14px;
            margin: 0;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login Admin</h2>
        <form action="{{ route('admin/login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="namaadmin" class="form-label">Nama Admin:</label>
                <input type="text" name="namaadmin" id="namaadmin" class="form-control" value="{{ old('namaadmin') }}" required autofocus />
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required />
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

            @if($errors->any())
                <div class="error-messages mt-3">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
