<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="mx-auto text-center mt-10" >
    <h1>LOGIN</h1>
    <br>
    <form action="{{ route ('login_Form') }}" method = "POST">
             @csrf
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder = "username" required> 
            <br><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder = "password" required>    
            <br><br>
            <button type="submit" class = "text-black border-black bg-blue-500">
                LOGIN
            </button>

            @if($errors -> any())
                <div>
                    <strong class="text-red-500">{{ $errors->first() }}</strong>
                </div>
            @endif
    </form>     
</div>
 
</body>
</html>