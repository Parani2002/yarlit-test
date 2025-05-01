<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
.active {
  background-color: #04AA6D;
}
    </style>
</head>
<body>
    
   
    <ul>
    <li><a href="index.php" class="active">Home page</a></li>
  <li><a href="pages/about.php">About page</a></li>
  <li><a href="pages/photo.php">Photo page</a></li>
  <li><a href="pages/video.php">Video page</a></li>
  <li><a href="pages/contact.php">Contact page</a></li>
</ul>
<h1>This is Home Page</h1>
<?php
      $name = "parani";
      echo $name;

      echo "<br/>";

      $$name = "tharan";
      echo $parani;

      echo "<br/>";

      $marks = array(10,20,30,40);
      echo $marks[0];

      for ($x=0; $x < count($marks) ; $x++) { 
        echo $marks[$x];
      }
      echo "<br/>";

      $x = 0;
      while($x < count($marks)){
        echo $marks[$x]. " ";

        $x++;
      }
      echo $x;

      $x=0;
      do{
        echo $marks[$x]." ";
        $x++;
      }while($x < count($marks));

      echo "<br/>";

      for($x=0; $x < 5; $x++) { 
        for ($y=0; $y < 3; $y++) { 
          echo $x,$y;
          echo "<br/>";
        }
      }

      echo "<table border ='2' width = '100%'>";
      for ($x=0; $x < 4; $x++) { 
        echo "<tr ($x%2 == 1) ? style='color:red':style='color:blue'>";
        for ($y=0; $y < 3; $y++) { 
          echo "<td>{$x}{$y}</td>";
        }
        echo "</tr>";
      }
      echo "</table>";


      echo "<table border ='2' width = '100%'>";
      for ($x=0; $x < 4; $x++) { 
        echo ($x%2==1) ? "<tr style='background:red'>":"<tr>";
        for ($y=0; $y < 3; $y++) { 
          echo "<td>{$x}{$y}</td>";
        }
        echo "</tr>";
      }
      echo "</table>";

      echo "<br/>";
      echo "<br/>";
      echo "<br/>";


      echo '<table border ="2" width = "100%>"';
      for ($x=1; $x <= 16; $x++) { 
        echo ($x%2==1) ? "<tr >":"<tr>";
        for ($y=1; $y <= 16; $y++) { 
          echo ($x*$y % 2 == 1)? '<td style="color:red">'. $x*$y . "</td>" : "<td>". $x*$y . "</td>";
        }
        echo "</tr>";
      }
      echo "</table>";


      $muralee = array(78,89,90);
      $kokilan = array(90,45,75);
      $parani = array(82,30,96);
      $pira = array(48,68,72);
      $shan = array(56,68,79);

      echo '<table border ="2" width = "100%>"';
      for ($x=1; $x <= 16; $x++) { 
        echo "<tr>";
        for ($y=1; $y <= 16; $y++) { 
          echo '<td style="color:red">'. $x*$y . '</td>';
        }
        echo "</tr>";
      }
      echo "</table>";
      echo "<br/>";
      echo "<br/>";
      echo "<br/>";
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



        ?>
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
              echo "<td>".$muralee[$i]. "</td>";
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
              echo "<td>".$kokilan[$i]. "</td>";
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
              echo "<td>".$parani[$i]. "</td>";
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
              echo "<td>".$pira[$i]. "</td>";
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
              echo "<td>".$shan[$i]. "</td>";
            };
            echo "<td>".array_sum($shan). "</td>";
            echo "<td>".round(array_sum($shan)/count($shan),2). "</td>";
            echo "<td>".getGrade(round(array_sum($shan)/count($shan),2)). "</td>";
             ?>
          </tr>
        </table>
</body>
</html>