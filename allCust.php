<?php

include 'connection.php';

$query = "SELECT * FROM `customers`";
$result = mysqli_query($connection, $query);
$customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
$i = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>All customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        #h {
            margin-top: 40px;
            border: 2px solid black;
            padding: 30px;
            background-color: aquamarine;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="my-5" id="h">All Customers</h1>
        <form action='addEl.php'>
            <button type='submit' class='btn btn-primary' style="margin-bottom:30px ;">Add new Customer</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer Email</th>
                    <th scope="col">Customer First Name</th>
                    <th scope="col">Customer Second Name</th>
                    <th scope="col">Customer State</th>
                    <th scope="col">Customer Zone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($customers as $customer) {
                ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $customer['email'] ?></td>
                        <td><?= $customer['f_name'] ?></td>
                        <td><?= $customer['l_name'] ?></td>
                        <td><?= $customer['state'] ?></td>
                        <td><?= $customer['zone'] ?></td>
                        <td>
                            <a href="editCust.php?customer_id=<?= $customer['customer_id'] ?>" class="btn btn-info">
                                Edit
                            </a>
                            <a href="deleteCust.php?customer_id=<?= $customer['customer_id'] ?>" class="btn btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>