<?php
  date_default_timezone_set('UTC');
  $currentTime = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>BRAVESHOT</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
      <h1 class="title">Work in progress!</h1>
      <p id="currentTime"><?php echo $currentTime; ?></p>
      <script src="script.js"></script>
  </body>
</html>
