<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      $muralee = array(78,89,90);
      $kokilan = array(90,45,75);
      $parani = array(82,30,96);
      $pira = array(48,68,72);
      $shan = array(56,68,79);
    function getGrade($marks){
        if($marks >= 75):
            return "A";
        elseif($marks >= 55 && $marks <= 75):
            return "B";
        elseif( $marks >= 45 && $marks <= 55):
            return "C";
        else:
            return "F";
        
        endif;
    }
    function getColor($marks){
        if($marks >= 75):
            return '<td style="color:red">'.$marks.'</td>';
        elseif($marks >= 55 && $marks <= 75):
            return '<td style="color:blue">'.$marks.'</td>';
        elseif( $marks >= 45 && $marks <= 55):
            return '<td style="color:yellow">'.$marks.'</td>';
        else:
            return '<td>'.$marks.'</td>';
        endif;
    }
    ?>
    <h1>Students Marks Sheet</h1>
<table border="2" width="100%">
          <tr>
            <td>Student</td>
            <td>Maths</td>
            <td>Physics</td>
            <td>Chemistry</td>
            <td>Total</td>
            <td>Average</td>
            <td>Results</td>
          </tr>
          <tr>
            <td>Muralee</td>
            <?php 
            for ($i=0; $i < count($muralee) ; $i++) { 
            //   echo "<td>".$muralee[$i]. "</td>";
                echo getColor($muralee[$i]);
            };
            echo "<td>".array_sum($muralee). "</td>";
            echo "<td>".round(array_sum($muralee) /count($muralee),2). "</td>";
            echo "<td>".getGrade(round(array_sum($muralee) /count($muralee),2)). "</td>";
             ?>
          </tr>
          <tr>
            <td>Kokilan</td>
            <?php 
            for ($i=0; $i < count($kokilan) ; $i++) { 
                echo getColor($kokilan[$i]);
            };
            echo "<td>".array_sum($kokilan). "</td>";
            echo "<td>".round(array_sum($kokilan)/count($kokilan),2). "</td>";
            echo "<td>".getGrade(round(array_sum($kokilan)/count($kokilan),2)). "</td>";
             ?>
          </tr>
          <tr>
            <td>Parani</td>
            <?php 
            for ($i=0; $i < count($parani) ; $i++) { 
                echo getColor($parani[$i]);
            };
            echo "<td>".array_sum($parani). "</td>";
            echo "<td>".round(array_sum($parani)/count($parani),2). "</td>";
            echo "<td>".getGrade(round(array_sum($parani)/count($parani),2)). "</td>";
             ?>
          </tr>
          <tr>
            <td>Pira</td>
            <?php 
            for ($i=0; $i < count($pira) ; $i++) { 
                echo getColor($pira[$i]);
            };
            echo "<td>".array_sum($pira). "</td>";
            echo "<td>".round(array_sum($pira)/count($pira),2). "</td>";
            echo "<td>".getGrade(round(array_sum($pira)/count($pira),2)). "</td>";
             ?>
          </tr>
          <tr>
            <td>Shan</td>
            <?php 
            for ($i=0; $i < count($shan) ; $i++) { 
                echo getColor($shan[$i]);
            };
            echo "<td>".array_sum($shan). "</td>";
            echo "<td>".round(array_sum($shan)/count($shan),2). "</td>";
            echo "<td>".getGrade(round(array_sum($shan)/count($shan),2)). "</td>";
             ?>
          </tr>
        </table>
</body>
</html>