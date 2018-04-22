<?php

session_start();

$textContent = "";

include "../../connection/connection.php";

$query = "SELECT test FROM users WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);

$textContent = $row['test'];

 ?>




<!DOCTYPE html>
<html>

<head>

<title>FPS Booklet Test</title>


<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../css/stylebooklet.css">


</head>


<body>

<div>
<a class="btn btn-success" href="../../index.php" role="button">Logout</a>
<div class="centertext">
  <h1 id="headertext">Junior Divison Online Booklet</h1>
  <h2>Problem 1</h2>
</div>
</div>

<div id="alertstop">
<div class="alert alert-danger col-md-5 mb-3 sidemargin" role="alert">
  <p><strong>- DO NOT PUT ANY NAMES OR IDENTIFYING MARKS ON ANY ONLINE &nbsp;&nbsp;BOOKLET(S).</strong></p>
  <p>- If you need to refer to the Future Scene <a href="#">click here</a>.</p>
  <p>- Each box will save automatically while you are writting it. - <span class="numberofchallenges"><strong>(NOTE: ONLY &nbsp;&nbsp;CURRENTLY WORKING ON CHALLENGE 1)</strong></span></p>
</div>
</div>


<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Step 1: Identifying Possible Challenges</a></li>

    <!--<li><a href="#tabs-2">Step 2: Select an Underlying Problem</a></li>
    <li><a href="#tabs-3">Step 3: Produce Solution Ideas</a></li>
    <li><a href="#tabs-4">Step 4: Select Criteria</a></li>
    <li><a href="#tabs-5">Step 5: Apply Criteria</a></li>
    <li><a href="#tabs-6">Step 6: Develop an Action Plan</a></li>-->
  </ul>
  <div class="alert alert-warning" role="alert">
    <p id="step1instructions">Now that you have thoroughly read and discussed the Future Scene, it is time to consider the many challenges related to it.</br>
      Begin by generating as many of those challenges as you can. Select the <span class="numberofchallenges"><strong>16</strong></span> that you think are the most important.</br></br>
    Write your <span class="numberofchallenges"><strong>16</strong></span> challenges below; word them clearly and thoroughly and use statement (rather than question) form.</p>
  </div>
  <div id="tabs-1">
      <?php include 'Steps/Step1.php' ?>
  </div>
  <!--<div id="tabs-2">
    <?php include 'Steps/Step2.php' ?>
  </div>
  <div id="tabs-3">
    <?php include 'Steps/Step3.php' ?>
  </div>
  <div id="tabs-4">
    <?php include 'Steps/Step4.php' ?>
  </div>
  <div id="tabs-5">
    <?php include 'Steps/Step5.php' ?>
  </div>
  <div id="tabs-6">-->

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="../../js/challenges1to16.js"></script>
<script type="text/javascript" src="../../js/javascript.js"></script>

</body>

</html>
