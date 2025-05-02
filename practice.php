<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        $numbers = array(30,40,50,60);  //index array
        $marks = array("Maths"=>90,"Tamil"=>77,"English"=>99); //associative array
       echo $marks["Maths"];
       echo $marks["Tamil"];
       echo $marks["English"];

       foreach ($marks as $key => $value) {
        echo "<p>".$key. "=" . $value."</p>";
       }
       $student_marks = [
        "muralee" => [
            "maths" => 60,
            "physics" => 88,
            "chemistry"=>90
        ],
        "kokilan" => [
            "maths" => 60,
            "physics" => 88,
            "chemistry"=>90
        ],
        "parani" => [
            "maths" => 73,
            "physics" => 55,
            "chemistry"=>77
        ],
        "pira" => [
            "maths" => 60,
            "physics" => 88,
            "chemistry"=>90
        ],
        "shanth" => [
            "maths" => 60,
            "physics" => 88,
            "chemistry"=>90
        ],

    ];
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
            return '<td style="color:green">'.$marks.'</td>';
        else:
            return '<td>'.$marks.'</td>';
        endif;
    }
   
        ?>
        <h1>Student Mark Sheet</h1>
       
        <table border="2">
            <tr>
                <th>student</th>
                <th>Maths</th>
                <th>Physics</th>
                <th>Chemistry</th>
                <th>Total</th>
                <th>Average</th>
                <th>Result</th>
            </tr>
            <?php 
   
                foreach ($student_marks as $name => $marks) {
                    echo "<tr>",
                    "<td>",$name,"</td>";
                    foreach ($marks as $mark) {
                        echo getColor($mark);
                    };
                    echo "<td>".array_sum($marks)."</td>";
                    echo "<td>".round(array_sum($marks) /count($marks),2)."</td>";
                    echo "<td>".getGrade(round(array_sum($marks)/count($marks),2)). "</td>";
                    "</tr>";
                }    
                foreach ($numbers as $k => $v) {
                    echo "<p>".$k." ". $v."</p>";
                }  
                print_r($student_marks);


                echo "<pre>";
                print_r($student_marks);
                echo "</pre>";
            
            ?>
        </table>
</body>
</html>