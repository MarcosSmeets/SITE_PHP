<?php
  include_once("conexao.php");

  $id = filter_input(INPUT_GET, 'id');

  $editQuery = "SELECT * FROM payments WHERE id='$id'";

  $edit = mysqli_query($conexao, $editQuery);

  $row_edit = mysqli_fetch_assoc($edit);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css">

  <script>
    $(document).ready(function() {
      $("#idValue").change(function() {
        var tax = ($("#idValue").val() * 5) / 100;
        $("#idTax").val(tax);
      })
    })
  </script>
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
          <a class="nav-link" href="index.php">Table</a>
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

  <form action="edit_usuario.php" method="POST" class="cr_form">
    <div class="form-grup">
      <input type="hidden" name="id" value="<?php echo $row_edit['id']; ?>">
    </div>
    <div class="form-grup">
      <label for="idTitle">Title</label>
      <input type="text" class="form-control" id="idTitle" name="title" maxlength="100" minlength="5" value="<?php echo $row_edit['title']; ?>">
    </div>
    <div class="form-grup">
      <label for="idValue">Value</label>
      <input type="number" class="form-control" id="idValue" name="valor" value="<?php echo $row_edit['valor']; ?>">
    </div>
    <div class="form-grup">
      <label for="idDate">Date</label>
      <input type="date" class="form-control" id="idDate" name="dia" value="<?php echo $row_edit['dia']; ?>">
    </div>
    <div class="form-grup">
      <label for="idTax">External Tax</label>
      <input type="text" class="form-control" id="idTax" name="tax" value="<?php echo $row_edit['tax']; ?>">
      <h2 id="idTax"></h2>
    </div>
    <div class="form-grup">
      <label for="idComments">Comments</label>
      <input type="text" class="form-control" id="idComments" name="comments" value="<?php echo $row_edit['comments']; ?>">
    </div>
    <button type="submit" class="btn btn-dark" name="edit">Edit</button>
  </form>

</body>

</html>