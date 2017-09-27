<!DOCTYPE html>
<html>
      <head>
            <meta charset="UTF-8">
            <title>Chessboard</title>
            <style>
                  table {
                        border-collapse: collapse;
                  }
                  td {
                        width: 20px;
                        height: 20px;
                  }
            </style>
      </head>
      <body>
      <?php
      echo "<table>";
        
      for($x = 1; $x <= 8; $x++) {
            echo "<tr>";
            for($y = 1; $y <= 8; $y++){
                  if(($x+$y)%2==0){
                        echo "<td style=\"background-color:#FFFFFF\"></td>";
                  } else {
                        echo "<td style=\"background-color:#000000\"></td>";
                  }   
            }
            echo "</tr>";
      }
      echo "</table>";
      ?>
      </body>
</html>

