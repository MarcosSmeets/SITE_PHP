<?php 
    include_once("conexao.php");

    $id = filter_input(INPUT_POST, 'id');
    $title = filter_input(INPUT_POST, 'title');
    $valor = filter_input(INPUT_POST, 'valor');
    $dia = filter_input(INPUT_POST, 'dia');
    $tax = filter_input(INPUT_POST, 'tax');
    $comments = filter_input(INPUT_POST, 'comments');


    $result = "UPDATE payments SET title='$title', valor='$valor', dia='$dia', tax='$tax', comments='$comments' WHERE id='$id'";

    $resul = mysqli_query($conexao, $result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <h1>payment edited with success</h1>
    <a href="index.php"><button type="button" class="btn btn-dark">Return to table</button></a>
</body>
</html>