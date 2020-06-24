<?php
include("conexao.php");

$consulta = "select * from payments";
$con = $conexao->query($consulta) or die($mysqli->error);

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Voxus</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Table<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Create</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="upload.php">Upload</a>
        </li>
      </ul>
    </div>
  </nav>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Value</th>
        <th scope="col">date</th>
        <th scope="col">External tax</th>
        <th scope="col">Comments</th>
        <th scope="col">Command</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($dado = $con->fetch_array()) {
      ?>
        <tr>
          <th scope="row"><?php echo $dado['id'] ?></th>
          <td><?php echo $dado['title'] ?></td>
          <td><?php echo $dado['valor'] ?></td>
          <td><?php echo $dado['dia'] ?></td>
          <td><?php echo $dado['tax'] ?></td>
          <td><?php echo $dado['comments'] ?></td>
          <td>
            <?php echo "<a href='edit.php?id=" . $dado['id'] . "<button type='button' class='btn btn-outline-info'>Edit</button></a>"; ?>
            <?php echo "<a href='delete.php?id=" . $dado['id'] . "<button type='button' class='btn btn-outline-info'>Delete</button></a>"; ?>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

</body>

</html>