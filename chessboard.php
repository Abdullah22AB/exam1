
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chest</title>
    <style>
        table{
            width:200px;
            height: 200px;
            margin:auto;
            border-collapse: collapse;
        }
        td{
            width:25px;
            height:25px;
            
        }
    </style>
</head>
<body>
    <table>
    <?php
    for($row = 0;$row < 8; $row++){
        echo "<tr>";
        for($col = 0 ; $col <8 ;$col++){
          if(($row + $col) % 2 == 0){
            $color="white";
          }else{
            $color="black";
          }
          echo "<td style='background-color:$color;'></td>";

        }
        echo "</tr>";
    }
?>
    </table>
</body>
</html>







