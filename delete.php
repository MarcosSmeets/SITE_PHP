<?php
    include_once("conexao.php");

    $id = filter_input(INPUT_GET, 'id');

    $deletQuery = "DELETE FROM payments WHERE id='$id'";

    $delete = mysqli_query($conexao, $deletQuery);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <h1>payment deleted</h1>
    <a href="index.php"><button type="button" class="btn btn-dark">Return to table</button></a>
</body>
</html>