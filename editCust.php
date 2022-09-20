<?php

include 'connection.php';
$idChange = $_GET['customer_id'];

$query = "SELECT * FROM customers where customer_id  = $idChange";
$result = mysqli_query($connection,$query);
$customers = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>EDIT</title>
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
        <h1 id="h">EDIT Customer</h1>
        <form action="updateData.php" method="POST">
            <input type="hidden" name="customer_id" value="<?= $customers['customer_id'] ?>" />
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?=$customers['email'] ?>" >
            </div>
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="f_name"value="<?=$customers['f_name'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Second Name</label>
                <input type="text" class="form-control" name="s_name"value="<?=$customers['l_name'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">State</label>
                <input type="text" class="form-control" name="state"value="<?=$customers['state'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Zone</label>
                <input type="text" class="form-control" name="zone"value="<?=$customers['zone'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
</body>

</html>