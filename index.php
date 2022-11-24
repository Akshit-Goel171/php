
<?php
// Include database file
include 'database.php';
$customerObj = new database();
// Delete record from table
if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $customerObj->deleteRecord($deleteId);
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


<?php
if (isset($_GET['msg1']) == "insert") {
    echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Registration added successfully
            </div>";
}
if (isset($_GET['msg2']) == "update") {
    echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Registration updated successfully
            </div>";
}
if (isset($_GET['msg3']) == "delete") {
    echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Record deleted successfully
            </div>";
}
?>
<!-- ------------------------------------------------- navbar ends ------------------------------------------------>

<p class="title"> facebook </p>


<!-- ------------------------------------ sliding images on front page ------------------------------------------->
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/facebook_interconnected.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Its not about gathering, its about socializing!!!</h5>
                    <p>Get yourself registered on facebook and socialize with as much people as you can. After all it's all about making contacts </p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/fab_cover_2.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Create Memories, Create Facebook!!</h5>
                    <p>Get to know about your surroundings. Know more people, create more memories</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/fb_slide_3.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5> Facebook, not only about people, but about their experience</h5>
                    <p> Facebook is not only for people but it is made of people. Without you, we are nothing</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- ---------------------------------- sliding image on front page ends ------------------------------------------>


<!-- ------------------------------------------ showing table image ---------------------------------------------->
<br>
<section>
    <h2> Facebook Profile Page ...
        <a href="add.php" style="float:right;"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a>
    </h2>
    <table class="table table-hover table-dark table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>phone</th>
            <th>Age</th>
            <th>Bio</th>

        </tr>
        </thead>
        <tbody>
        <?php
        $customers = $customerObj->displayData();
        foreach ($customers as $customer) {
            ?>
            <tr>
                <td><?php echo $customer['id'] ?></td>
                <td><?php echo $customer['name'] ?></td>
                <td><?php echo $customer['email'] ?></td>
                <td><?php echo $customer['phone'] ?></td>
                <td><?php echo $customer['age'] ?></td>
                <td><?php echo $customer['bio'] ?></td>
                <td>

                    <button class="btn btn-primary mr-2"><a href="edit.php?editId=<?php echo $customer['id'] ?>">
                            <i class="fa fa-pencil text-white" aria-hidden="true"></i></a></button>
                    <button class="btn btn-danger"><a href="index.php?deleteId=<?php echo $customer['id'] ?>" onclick="confirm('Are you sure want to delete this record')">
                            <i class="fa fa-trash text-white" aria-hidden="true"></i>
                        </a></button>
                </td>
                </tr>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</section>

<!-- ------------------------------------------------- adding footer ------------------------------------------>
<?php require_once 'Footer.php' ?>








</body>
</html>