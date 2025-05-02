<?php

function getFullname($fname, $lname){
    return $fname." ".$lname;
}

$fullname = GETFULLname("Suntharalingam","Paranitharan");
echo "My Fullname is ",$fullname;

echo 'my fullname is'.$fullname;
?>