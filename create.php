<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css">

  <script>
    $(document).ready(function(){
      $("#idValue").change(function(){
        var tax = ($("#idValue").val()*5)/100;
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
        <li class="nav-item">
          <a class="nav-link" href="index.php">Table</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Create<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="upload.php">Upload</a>
        </li>
      </ul>
    </div>
  </nav>

  <form action="processa.php" method="POST" class="cr_form">
    <div class="form-grup">
      <label for="idTitle">Title</label>
      <input type="text" class="form-control" id="idTitle" name="title" maxlength="100" minlength="5" required>
    </div>
    <div class="form-grup">
      <label for="idValue">Value</label>
      <input type="number" class="form-control" id="idValue" name="valor" step="0.010" required>
    </div>
    <div class="form-grup">
      <label for="idDate">Date</label>
      <input type="date" class="form-control" id="idDate" name="dia" required>
    </div>
    <div class="form-grup">
      <label for="idTax">External Tax</label>
      <!-- <h2 type="number" id="idTax" class="form-control" name="tax"></h2> -->
      <input type="number" class="form-control" id="idTax" name="tax" step="0.010" required>
      
    </div>
    <div class="form-grup">
      <label for="idComments">Comments</label>
      <input type="text" class="form-control" id="idComments" name="comments">
    </div>
    <button type="submit" class="btn btn-dark">Submit</button>
  </form>
</body>

</html>