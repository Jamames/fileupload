

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Filuppladdning</title>
    <style>
      input[type="file"] {
        background-color: lightgray;
      }
    </style>
  </head>
  <body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      Välj en bild att ladda upp:
      <input type="file" name="fileToUpload" id="fileToUpload" />
      <input type="submit" value="Ladda upp" name="submit" />
    </form>
  </body>
</html