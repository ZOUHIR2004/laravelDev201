<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 - Page Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .container {
            text-align: center;
        }

        .container h1 {
            font-size: 120px;
            font-weight: 900;
            letter-spacing: 5px;
        }

        .container h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .container p {
            margin-bottom: 25px;
            font-size: 16px;
            opacity: 0.9;
        }

        .btn {
            text-decoration: none;
            padding: 12px 30px;
            background-color: #fff;
            color: #4e73df;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .btn:hover {
            background-color: #f8f9fc;
            transform: translateY(-3px);
        }

        @media (max-width: 600px) {
            .container h1 {
                font-size: 80px;
            }

            .container h2 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>404</h1>
        <h2>Oops! Page Not Found</h2>
        <p>The page you are looking for doesn't exist or has been moved.</p>
        <a href="{{ route('home')}} " class="btn">Go Back Home</a>
    </div>

</body>
</html>