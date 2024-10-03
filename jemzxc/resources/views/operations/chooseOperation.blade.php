<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChooseOp</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        button {
            background-color: #1e1e1e;
            border: none;
            padding: 15px 25px;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #3a3a3a;
        }
        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
    <div class="container">
        <button type="submit">
            <a href="{{ route('ADDITION') }}">ADDITION</a>
        </button>
        <button type="submit">
            <a href="{{ route('SUBTRACTION') }}">SUBTRACTION</a>
        </button>
        <button type="submit">
            <a href="{{ route('MULTIPLICATION') }}">MULTIPLICATION</a>
        </button>
        <button type="submit">
            <a href="{{ route('DIVISION') }}">DIVISION</a>
        </button>
    </div>
</body>
</html>
