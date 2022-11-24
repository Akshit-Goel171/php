<?php

// Include database file
include 'database.php';

$customerObj = new database();

// Insert Record in customer table
if(isset($_POST['submit'])) {
    $customerObj->insertData($_POST);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Profile Page </title>
    <meta name="description" content="This is an assignment where we are going to create Profile Page">
    <meta name="robots" content="noindex, nofollow">
    <!--  Add our Google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <!--  Add our Bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--  Add our custom CSS  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

</head>
<body>



<!-- ------------------------------------------ header nav bar -------------------------------------------------------->
<?php require_once 'Header.php' ?>


<!-- ------------------------------------------------- navbar ends ------------------------------------------------>
<p class="title"> facebook </p>

<!-- --------------------------------------------- adding form here ----------------------------------------------->
<div>
    <p class="form_head">
        PLEASE FILL THE FORM BELOW
    </p>
</div>

<section class="container">
    <div class="div_form">


        <form action="add.php" method="POST">
            <div class="form-group">



                <label for="name">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your full name" required="">
            </div>



            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter phone" required="">
            </div>

            <div class="form-group">
                <label for="age">Your Age</label>
                <input type="number" class="form-control" name="age" placeholder="Enter age" required="">
            </div>

            <div class="form-group form-group-bio">
                <label for="bio">Tell About Yourself</label>
                <textarea name="bio" rows="4" class="form-control" placeholder="Tell to others something about yourself">
        </textarea>
            </div>
            <br>
            <div class="buttons_sub">
                <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="submit">
            </div>
            <br>
        </form>
    </div>
</section>

<!-- ------------------------------------------------- adding footer ------------------------------------------>
<?php require_once 'Footer.php' ?>



</body>
</html>