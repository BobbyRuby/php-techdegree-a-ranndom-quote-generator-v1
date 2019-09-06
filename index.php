<!DOCTYPE html>
<?php
 include_once("inc/functions.php");
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
    <!-- I understand this is not best practice and this should be in a .js file but for simplicity and quickness have inserted this script tag -->
    <script>
        setTimeout(reload, 15000);
        function reload() {
            window.location.reload(true)
        }
    </script>
<?php getRandomColor(); ?>
</head>
<body>
  <div class="container">
    <div id="quote-box">
        <?php
        printQuote($quotes);
        ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>