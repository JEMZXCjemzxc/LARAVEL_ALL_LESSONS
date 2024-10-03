<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CalculatorController extends Controller

{
    // GET

    public function showOperation() {
        return  view('operations.chooseOperation',[
            'result' => null
        ]);
    }


    public function showAddition() {
        return  view('operations.addition',[
            'result' => null
        ]);
    }

    public function showSubtraction() {
        return  view('operations.subtraction',[
            'result' => null
        ]);
    }

    public function showMultiplication() {
        return  view('operations.multiplication',[
            'result' => null
        ]);
    }

    public function showDivision() {
        return  view('operations.division',[
            'result' => null
        ]);
    }

    // POST

    public function addition(Request $request) {
      $validatedData = $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
        ]);

        $num1 = $validatedData['number1'];
        $num2 = $validatedData['number2'];
        
        $result = $num1 + $num2;
        return view('operations.addition',[
            'result' => $result
        ]);

    }

    public function subtraction(Request $request) {
        $validatedData = $request->validate([
              'number1' => 'required|numeric',
              'number2' => 'required|numeric',
          ]);
  
          $num1 = $validatedData['number1'];
          $num2 = $validatedData['number2'];
          
          $result = $num1 - $num2;
          return view('operations.subtraction',[
              'result' => $result
          ]);

      }

      public function multiplication(Request $request) {
        $validatedData = $request->validate([
              'number1' => 'required|numeric',
              'number2' => 'required|numeric',
          ]);
  
          $num1 = $validatedData['number1'];
          $num2 = $validatedData['number2'];
          
          $result = $num1 * $num2;
          return view('operations.addition',[
              'result' => $result
          ]);
  
      }

      public function division(Request $request) {
        $validatedData = $request->validate([
              'number1' => 'required|numeric',
              'number2' => 'required|numeric',
          ]);
  
          $num1 = $validatedData['number1'];
          $num2 = $validatedData['number2'];
          
          $result = $num1 / $num2;
          return view('operations.addition',[
              'result' => $result
          ]);
  
      }
}
