<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<?php

include 'connection.php';

$iDD = $_GET['customer_id'];

$query = "DELETE FROM customers WHERE customer_id =$iDD";
$result = mysqli_query($connection,$query);

echo "<div class='alert alert-success' role='alert'>
        Customer Deleted Successfully .. Thank You
        </div>";
        echo "<form action='allCust.php'>
                <button type='submit' class='btn btn-success' style='margin:30px ;'>All Customers</button>
                </form>";