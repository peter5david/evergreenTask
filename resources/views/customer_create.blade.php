<?php
session_start();
session_unset();
session_destroy();
?>
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
    
<html>
   <head>
      <title>Evergreen Technical Task</title>
   </head>

   <body>
    <img src="evergreen_logo.png">
    <h1>Technical Task PHP, Laravel, MySQL</h1>
    <div class="customerdetails">
        <h2>Please enter customer details</h2>
      <form action = "/create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
         <tr>
               <td>Company</td>
               <td><input type='text' name='company' placeholder="Company name"/></td>
            </tr>
            <tr>
               <td>First Name</td>
               <td><input type='text' name='firstname'  placeholder="Firstname"/></td>
            </tr>
            <tr>
               <td>Last Name</td>
               <td><input type='text' name='lastname'  placeholder="Lastname"/></td>
            </tr>
            <tr>
               <td>Phone number</td>
               <td><input type='text' name='phone'  placeholder="Phone number"/></td>
            </tr>
            <tr>
               <td>Address</td>
               <td><input type='text' name='address'  placeholder="Address"/></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add customer" class="button"/>
               </td>
            </tr>
         </table>
      </form>
      </div>
        <div class="login">
           <h3> To view the customer details please <a href="/login">LOG IN!</a></h3>
        </div>

   </body>
</html>