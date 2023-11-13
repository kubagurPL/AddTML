<html>

  <body>
    <h1>Thank you for submitting your HTML!</h1>
    You submitted:<?php echo $_POST["ATML"]; 
    $ATML = $_POST["ATML"];
    $mainFile = fopen("ATMLpage.php","a") or die("Unable to open file!");
    fwrite($mainFile,$ATML);
    fwrite($maniFile,"\n");
    ?>
    
    <button onclick=goHome>Go back!</button>
    <script>
      function goHome(){
        window.location.href = "index.php";
      }
    </script>
  </body>
  
</html>
