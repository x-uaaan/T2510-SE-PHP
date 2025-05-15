<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: url('/image/Journal.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
        }

        .overlay {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 3rem;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 20px;
        }

        .button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="overlay">
        <div class="container">
            <h1>Welcome to Our System</h1>
            <p>Streamline your experience with the best tools and solutions.</p>
            <a href="#" class="button">Get Started</a>
        </div>
    </div>
</body>

</html>