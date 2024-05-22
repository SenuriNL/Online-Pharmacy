<?php
include 'config.php';

$id = $_GET['updateid'];
$sql = "select * from `dperson` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$licenceno = $row['licenceno'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $licenceno = $row['licenceno'];

    $sql = "update `person` set id=$id, name='$name', email='$email', mobile='$mobile',$licenceno = $row['licenceno'], where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: newdperson.php');
    } else {
        die(mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Manage Delivery Person</title>
    <link rel="stylesheet" type="text/css" href="display#.css">
</head>

<body>

    <!-- header part -->

    <header>
        <section class="logoschbar">
            <a href="https://www.wix.com/blog/best-fonts-for-logos#viewer-adtuf" class="Logo">HelthDoc</a>
            <div class="buttonset">
                <div>
                    <button type="button" onclick="location.href=''" class="userregiste">Log out</button>
                </div>
            </div>
        </section>
        <section class="treenavbar">
            <a href="">Home</a>

        </section>
    </header>
    <!-- finish -->


    <!-- slide bar -->
    <div class="sidebar">
        <div class="profile">
            <img src="\Website1\images\admin_girl.png">
            <br>
            <br>
            <h2>Admin</h2>
            <h3>Himeshika De Silva</h3>
            <br>
            <br>
            <br>

        </div>
        <ul>
            <li>
                <center><a href="\Website1\Administrator\dashboard.php">Dashboard</a></center>
            </li>
            <br>
            <br>
            <br>
            <li>
                <center><a href="#">Staff Details</a></center>
            </li>
            <br>

        </ul>
        <!-- slide bar -->
        <div class="sidebar">
            <div class="profile">
                <img src="\Website1\images\admin_girl.png">
                <br>
                <br>
                <h2>Admin</h2>
                <h3>Himeshika De Silva</h3>
                <br>
                <br>
                <br>
            </div>
            <ul>
                <li>
                    <center><a href="\Website1\Administrator\dashboard.php">Dashboard</a></center>
                </li>
                <br>
                <br>
                <br>
                <li>
                    <center>Staff Details</center>
                </li>

                <div class="dropdown">
                    <ul> <button><a href="\Website1\Slide bar\Staff\Pharmacist\manage.php">Pharmacist</a></button></ul>
                    <div class="dropdown-options">
                        <a href="\Website1\Slide bar\Staff\Pharmacist\manage.php">Add Pharmacist</a><br>
                        <a href="\Website1\Slide bar\Staff\Pharmacist\submit.php">Update Pharmacist</a>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="dropdown">
                    <ul> <button><a href="\Website1\Slide bar\Staff\AssistantPharmacist\add.php">Assistant
                                Pharmacist</a></button></ul>
                    <div class="dropdown-options">
                        <a href="\Website1\Slide bar\Staff\AssistantPharmacist\add.php">Add Assistant Pharmacist</a><br>
                        <a href="\Website1\Slide bar\Staff\AssistantPharmacist\display$.php">Update Assistant
                            Pharmacist</a>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="dropdown">
                    <ul> <button><a href="#">Delivery Person</a></button></ul>
                    <div class="dropdown-options">
                        <a href="#">Add Delivery Person</a><br>
                        <a href="\Website1\Slide bar\Staff\DeliveryPerson\display#.php">Update Delivery Person</a>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
            </ul>
        </div>

        <!--main-content-start-->

    </div class="Customer-details">

    <div class="main-form">
        <h2>Manage Users</h2>

        <form method="post" class="FRM">
            <p>Update Delivery Person Details</p>
            <br>

            <label for="name">Name :</label><br>
            <input type="text" name="name" placeholder="*Enter name" class="nam" required>
            <br>
            <label for="email">Email :</label><br>
            <input type="text" name="email" placeholder="*Enter Email address" class="Mil" maxlength="25" minlength="15"
                required>
            <br>
            <label for="mobile">Mobile :</label><br>
            <input type="text" name="mobile" placeholder="*Enter Phone Number" class="con" maxlength="10" minlength="10"
                required>
            <br>
            <label for="licenceno">Licence Number :</label><br>
            <input type="text" name="licenceno" placeholder="*Enter Licence Number" class="con" maxlength="10"
                minlength="10" required>
            <br>
            <br>
            <br>
            <div class="buttonset">

                <button type="submit" name="submit" class="userregiste">Submit </button>
                <button type="reset" name="reset" class="userregiste">Reset </button>

            </div>

        </form>
    </div>
    </div>
</body>

</html>