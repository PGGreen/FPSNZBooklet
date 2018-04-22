<?php

session_start();

if($_SESSION['username'])
{
  echo "Hello ".$_SESSION['username'];
}
else {
  //header("Location: ../../index.php");
}



//$_SESSION


 ?>

<!DOCTYPE html>
<html>

<head>

<title>FPSNZ Admin</title>

<link rel="icon" href="resources/fpsnz.png">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../css/style.css">


</head>



<body>

<form method="post">

<input type="text" name="school" placeholder="School Name">
<input type ="password" name="password" placeholder="Password">
<input type="submit" name="submit" value="Submit">
<input type="checkbox" name="stayloggedin">

</form>




<h1 class="centertext">Future Problem Solving New Zealand</h1>
<h2 class="centertext">Admin Page</h2>


<div class="col-md-6">
<table class="table table-bordered">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>School</td>
                <td>Button</td>
                <td>Checkbox</td>
            </tr>
        </thead>
        <tbody>
        <?php
            include "../../connection/connection.php";

            $query = "SELECT * FROM users";
            $result = mysqli_query($link, $query);

            while($row = mysqli_fetch_array($result))
            {
              ?>
                  <tr>
                      <td><?php echo $row['id']?></td>
                      <td><?php echo $row['username']?></td>
                      <td><?php echo $row['school']?></td>
                      <td><button class="editbtn">edit</button></td>
                      <td><input type=checkbox></td>
                  </tr>
              <?php
            }
            ?>
    </tbody>
</table>
</div>











<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="js/challenges1to16.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>

</body>

<footer>

<p>&copy 2018 Future Problem Solving New Zealand All Rights Reserved</p>

</footer>

</html>