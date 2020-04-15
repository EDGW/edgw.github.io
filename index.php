<html>
  <head>
    <?php
    if(str_replace("compress=urjs&link=","",$_SERVER['QUERY_STRING'])==$_SERVER['QUERY_STRING']){
    echo "<meta http-equiv=\"refresh\" content=\"0;url=404.html\">";
    }else{
    $a = str_replace("compress=urjs&link=","",$_SERVER['QUERY_STRING']);
      echo "<meta http-equiv=\"refresh\" content=\"0;url=$a\">";
    }
      
    ?>
  </head>
  <body>
    
  </body>
</html>