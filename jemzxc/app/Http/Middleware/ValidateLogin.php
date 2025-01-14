<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->isMethod('post')){
            $validatedData = $request->only('username', 'password');

            $username = "admin";
            $password = "123";

            if($validatedData['username'] === $username && $validatedData['password'] === $password){
                // return redirect()->route('gotodashboard'); 

                return redirect()->route('gotodashboard')->with('confirm', 'LOGIN SUCCESSFULLY');
            }
            else {
                return redirect()->back()->withErrors([$username => 'username or password is incorrect']);                 
            }
        }
        return $next($request);
    }
}
