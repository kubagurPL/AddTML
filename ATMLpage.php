<html>
  <head><title>ATML HERE WOOHOO</title></head>

  <body>
    <button onclick="goBackHome();">Take me back!!</button>
    <?php 
    $file = fopen("ATMLpage.txt","r") or die("Unable to open!");
    echo fgets($myfile);
    ?>
  </body>
</html>
