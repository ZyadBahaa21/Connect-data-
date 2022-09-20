<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<?php

include "connection.php";

$email = $_POST['email'];
$Fname = $_POST['f_name'];
$Sname = $_POST['s_name'];
$stat = $_POST['state'];
$zon = $_POST['zone'];

// echo "$Fname <br> $Sname <br> $stat  <br> $zon ";

if (empty($email) || empty($Fname) || empty($Sname) || empty($stat) || empty($zon)) {
    echo "<div class='alert alert-danger' role='alert'>
        OOOOOPS Your Data Input Is Not Complete</div>";

    echo "<form action='addEl.php'>
        <button type='submit' class='btn btn-danger'style='margin:30px ;'>Try Again</button>
        </form>";
} else {
    $query = "INSERT INTO `customers` (`email`,`f_name`,`l_name`,`state`,`zone`)
                VALUES ('$email','$Fname','$Sname','$stat','$zon')";
    $reso = mysqli_query($connection, $query);
    $checkAdd = mysqli_affected_rows($connection);

    if ($checkAdd >= 1) {
        echo "<div class='alert alert-success' role='alert'>
        Your Data Added Successfully .. Thank You
        </div>";
        echo "<form action='allCust.php'>
                <button type='submit' class='btn btn-success' style='margin:30px ;'>All Customers</button>
                </form>";
    }
}
