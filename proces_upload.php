<?php
include_once("conexao.php");

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower((end($fileExt)));
    $changeFiletoCsv = "csv";

    $allow = array('xlsx', 'pdf');

    if (in_array($fileActualExt, $allow)) {
        if ($fileError === 0) {
            $fileNameNew = $fileExt[0] . "." . $fileActualExt;
            $finalDestination = 'uploads/' . $fileNameNew;

            move_uploaded_file($fileTmpName, $finalDestination);

            // $handle = fopen($fileNameNew, 'r');
            // while ($data = fgetcsv($handle, 1000, ',') !== FALSE) {
            //     $title = $dado[1];
            //     $value = $dado[2];
            //     $dia = $dado[3];
            //     $tax = ($dado[2] * 5) / 100;
            //     $comments = $dado[4];

            //     $query = "insert into payments (title, valor, dia, tax, comments) values ('$title', '$valor', '$dia', '$tax', '$comments')";

            //     $run = mysqli_query($conexao, $query);
            // }
        }
    }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <h1>File Uploaded</h1>
    <a href="index.php"><button type="button" class="btn btn-dark">Return to table</button></a>
</body>

</html>