<?php

session_start();

include "connection/connection.php";

if(array_key_exists('submit', $_POST))
{
  if($_POST['username'] == "")
  {
    echo "Please enter a username";
  }
  else if($_POST['password'] == "")
  {
    echo "Please enter a password";
  }
  else
  {
    $query = "SELECT id,isAdmin FROM users WHERE username ='".mysqli_real_escape_string($link, $_POST['username'])."' LIMIT 1";

    $result = mysqli_query($link, $query);

    $row = mysqli_fetch_array($result);

  if(mysqli_num_rows($result) > 0)
    {
      $_SESSION['id'] = $row['id'];

      if($row['isAdmin'])
      {
        header("Location: webpages/admin/admin.php");
      }
      else
      {
        header("Location: webpages/booklets/booklet.php");
      }

    }
  }
}







//$query = "SELECT * FROM users";
//$result = mysqli_query($link, $query);

//if($result)
//{

//$row = mysqli_fetch_array($result);

//while($row = mysqli_fetch_array($result))
//{
  //print_r($row);
  //echo "Your name is ".$row["username"]." and your password is ".$row["password"];
//}

//print_r($row);

//}




//print_r($_POST);
//echo "Hi There ".$_POST['usernameget']."!";


 ?>

<!DOCTYPE html>
<html>

<head>

<title>FPSNZ Booklet - Login</title>

<link rel="icon" href="resources/fpsnz.png">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


</head>



<body>

<ul>
  <li class="listitem">Coffee
    <ul>
      <li>Coffee</li>
      <li>Coffee</li>
      <li>Coffee</li>
    </ul>
  </li>
  <li>Tea</li>
    <ul>
      <li>Coffee</li>
      <li>Coffee</li>
      <li>Coffee</li>
    </ul>
  <li>Milk</li>
    <ul>
      <li>Coffee</li>
      <li>Coffee</li>
      <li>Coffee</li>
    </ul>
</ul>

<ul>
  <li class="dir">subject1
      <ul>
          <li class="dir">lab1
              <ul>
                  <li>lab1.pdf</li>
              </ul>
          </li>
          <li class="dir">lab2
              <ul>
                  <li>lab2.pdf</li>
              </ul>
          </li>
          <li class="dir">lab3
              <ul>
                  <li>lab3.pdf</li>
              </ul>
          </li>
      </ul>
  </li>
  <li class="dir">subject2
      <ul>
          <li class="dir">lab1
              <ul>
                  <li>lab1.pdf</li>
              </ul>
          </li>
          <li class="dir">lab2
              <ul>
                  <li>lab2.pdf</li>
              </ul>
          </li>
          <li class="dir">lab3
              <ul>
                  <li>lab3.pdf</li>
              </ul>
          </li>
      </ul>
  </li>
  <li class="dir">subject3
      <ul>
          <li class="dir">lab1
              <ul>
                  <li>lab1.pdf</li>
              </ul>
          </li>
          <li class="dir">lab2
              <ul>
                  <li>lab2.pdf</li>
              </ul>
          </li>
          <li class="dir">lab3
              <ul>
                  <li>lab3.pdf</li>
              </ul>
          </li>
      </ul>
  </li>
</ul>


<h1 class="centertext">Future Problem Solving New Zealand</h1>
<h2 class="centertext">Online Booklet Login</h2>
<h4 class="centertext"><strong><span class="testsitered">(PLEASE NOTE THIS IS A TEST SITE ONLY)</strong></span></h4>

<div class="alert alert-warning col-md-3 mb-3 sidemargin" role="alert">
  <p>If you are a School and would like to register for the FPS programme please visit <a href="http://fpsnz.co.nz/2018registration">FPSNZ <?php echo date("Y"); ?> Registration</a>.</p>
</div>

<div class="alert alert-danger col-md-3 mb-3 sidemargin" role="alert">
  <p>If you are having problems logging in, or if you have any other concerns. Please email <a href="mailto:admin@fpsnz.co.nz">admin@fpsnz.co.nz</a></p>
</div>

<div class="alert alert-primary col-md-3 mb-3 sidemargin" role="alert" id="alertenterinfo">
  Enter your School or Indivdual login here:
</div>

<p class="testsitered"><strong>For testing purposes please use the following logins:</strong></p>
<p class="testsitered"><strong><span id="testlogin">School</span></br>Username: test</br>Password: test</strong></p>
<p class="testsitered"><strong><span id="testlogin">Admin</span></br>Username: admin</br>Password: admin</strong></p>

<form method="post">
  <div class="form-group col-md-4 mb-3">
    <label for="exampleInputUsername1">Username</label>
    <input type="username" class="form-control" id="exampleInputUsername1" aria-describedby="usernameHelp" placeholder="Enter Username" name="username">
  </div>
  <div class="form-group col-md-4 mb-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div id="stayloggedin">
    <p><input type="checkbox" name="stayloggedin"> Stay logged in</p>
  </div>
  <button type="submit" class="btn btn-primary sidemargin" id="submitbutton" name="submit">Login</button>
</form>

<p>&copy 2018 Future Problem Solving New Zealand All Rights Reserved</p>

<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="js/challenges1to16.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>

</body>

</html>
