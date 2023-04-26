<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Technical Task - Peter David</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS (in a public folder) -->
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
<h1>Sign up</h1>
<div class="customerdetails">
<h2>Please enter your details</h2>

      <form action = "/logincreate" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
         <tr>
               <td>Email</td>
               <td><input type='text' name='email' /></td>
            </tr>
            <tr>
               <td>Password</td>
               <td><input type='password' name='password' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Sign up!" class="button"/>
               </td>
            </tr>
         </table>
      </form>
      </div>
        <div class="login">
           <h3> Back to <a href="/login">Login!</a> </h3>
        </div>
        <div class="login">
            <a href="/">HOME!</a>
        </div>
      
   </body>
</html>