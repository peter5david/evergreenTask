<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Customer Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

          <!-- CSS (in a public folder) -->
          <link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
    <?php 
    if (!isset($_SESSION['email'])){   ?>
     <h1>Please log in first</h1>
     <a href = "/login">Click Here</a> to Log in.
    <?php
    } else {
    ?> 

  <h1>View Customer Records</h1>

  <div class="customerdetails">  
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
  <table id="example" class="display" style="width:100%">
    <thead>
      <tr>
        <th>Company</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Google Map </th>
      </tr>
    </thead>
    <tbody>

    @foreach ($customers as $customers)
<tr>
<td>{{ $customers->company }}</td>
<td>{{ $customers->firstname }}</td>
<td>{{ $customers->lastname }}</td>
<td>{{ $customers->phone }}</td>
<td>{{ $customers->address }}</td>
<td><iframe
  width="150"
  height="90"
  style="border:0"
  loading="lazy"
  allowfullscreen
  referrerpolicy="no-referrer-when-downgrade"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAVpy1Cwl4nv8gxc1c_x_46zisi60zfSs0
    &q={{ $customers->address }}">
</iframe></td>
</tr>
@endforeach
  
    </tbody>
  </table>
  
</div>
<div class="login">
            <a href="/">HOME & Log out!</a>
        </div>
        <?php } ?>
</body>
</html>

</table>
</body>
</html>