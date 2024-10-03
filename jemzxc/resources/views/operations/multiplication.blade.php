<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MULTIPLICATION</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
</head>
<body>
    <div class="mx-auto text-center bg-gray-400">
        <h1>THIS IS CALCULATOR</h1>
            <form action="{{route('MUL')}}" class="mt-5" method="POST">
                @csrf
                <label for="num1">Number 1: </label>
                <input type="text" name="number1" id="num1" autofocus required> 
            
                <!-- validation -->
                    @if ($errors->has('number1'))
                        <span class = "text-danger">{{$errors->first('number1')}}
                    @endif
                <br>
                <label for="num1">Number 2: </label>
                <input type="text" name="number2" id="num2" required>
                 @if ($errors->has('number1'))
                        <span class = "text-danger">{{$errors->first('number1')}}
                    @endif
                <br>
                <button type="submit" class="mt-5 mb-5 font-bold bg-blue-500
                                                 text-black px-4 py-2
                                                 hover:bg-blue-800">   
                    calculate
                </button>

                @if(isset($result))
                <h3 class="text-xl">Result: {{$result}}</h3>
                @endif

            </form>
            
            <div>
                <button type= "submit">
                    <a href="{{route ('OPERATION') }}">BACK</a>
                </button>
            </div>
            
                    
           
    </div>
</body>
</html>