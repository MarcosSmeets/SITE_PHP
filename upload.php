<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                <li class="nav-item">
                    <a class="nav-link" href="create.php">Create</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Upload<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <form method="post" enctype="multipart/form-data" action="proces_upload.php">
        <div class="form-group">
            <label for="exampleFormControlFile1">Upload File</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
            <button type="submit" class="btn btn-dark" name="submit">Upload</button>
        </div>
    </form>
</body>
</html>
