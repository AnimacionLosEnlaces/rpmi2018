<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/favicon-24x24.png" />
<title>Ejemplo PHP</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bs/bootstrap.css">

<!-- jQuery library -->
<script src="js/jquery.js"></script>

<!-- Popper JS -->
<script src="js/popper.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bs/bootstrap.js"></script>
</head>

<body>
<div class="container">

	<div class="form-group">
      <label for="sel1">Select list:</label>
      <select class="form-control" id="sel1">
        <?php for($n=1;$n<=2000;$n++) : ?>
        <option value="<?= $n ?>"><?= $n ?></option>
        
        <?php endfor ?>
      </select>
    </div>
</div>


</body>
</html>