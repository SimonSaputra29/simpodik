<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(135deg, #727272, #f8f8f8);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .login-card {
      background: white;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
      max-width: 400px;
      width: 100%;
    }

    .form-control:focus {
      border-color: #2575fc;
      box-shadow: 0 0 0 0.25rem rgba(37, 117, 252, 0.25);
    }

    .btn-primary {
      background-color: #2575fc;
      border: none;
    }

    .btn-primary:hover {
      background-color: #1a5ed6;
    }

    .form-title {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 1.5rem;
      text-align: center;
      color: #333;
    }

    .form-footer {
      margin-top: 1rem;
      text-align: center;
    }

    .form-footer a {
      color: #2575fc;
      text-decoration: none;
    }

    .form-footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <div class="form-title">Masuk ke Akun Anda</div>
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Alamat Email</label>
        <input type="email" class="form-control" id="email" placeholder="email@contoh.com" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Kata Sandi</label>
        <input type="password" class="form-control" id="password" placeholder="Kata sandi" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
