<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php
  include "includes/persons.php";
  ?>
  <table class="table">
    <thead>
      <tr>
        <th>Vorname</th>
        <th>Nachname</th>
        <th>Alter</th>
        <th>Land</th>
      </tr>
    </thead>
    <tbody>
      <?php
        writeYoungNonSuisse();
      ?>
    </tbody>
  </table>
</body>

</html>