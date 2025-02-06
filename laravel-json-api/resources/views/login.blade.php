<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Add Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ06xvIar8k9D9+rb3p1irOQJ6YoOSu6YNhGhP3MB6iX3j1LUy5dBaSSRxFf" crossorigin="anonymous">
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f6f9;
    padding-top: 50px;
}

.container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

.form-group {
    margin-bottom: 15px;
}

button {
    width: 100%;
}

    </style>
</head>
<body>

<div class="container">
    <h2 class="my-5">Login</h2>

    <!-- Display errors if any -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="loginForm">
        @csrf

        <div class="form-group mb-3">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" class="form-control" required value="{{ old('email') }}">
        </div>

        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <div id="error-message" style="color: red; display: none;"></div>

</div>

<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();

        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;

        fetch('/api/v2/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ email: email, password: password })
        })
        .then(response => response.json())
        .then(data => {
            if (data.access_token) {
                // Save the token (you might want to store it in localStorage or sessionStorage)
                localStorage.setItem('access_token', data.access_token);
                // Redirect or handle further actions
                window.location.href = '/home';
            } else {
                // Handle error
                document.getElementById('error-message').textContent = data.error || 'An error occurred';
                document.getElementById('error-message').style.display = 'block';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('error-message').textContent = 'An unexpected error occurred';
            document.getElementById('error-message').style.display = 'block';
        });
    });
</script>

</body>
</html>
