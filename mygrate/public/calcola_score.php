<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$mysqli = new mysqli('localhost', 'root', 'Keops1999!!!', 'mygrt_mygrate');
if ($mysqli->connect_errno) {
     //echo "Error: Failed to make a MySQL connection, here is why: \n";
     //echo "Errno: " . $mysqli2->connect_errno . "\n";
     //echo "Error: " . $mysqli2->connect_error . "\n";
     exit;
}

@mysqli_set_charset( $mysqli, 'utf8');

$login=$_REQUEST['login'];


$num=39; // numero campi tracciato mygrt_usr
$score=0;

$sql = "SELECT * FROM mygrt_usr WHERE login_user = '".$login."'";
 //echo "<br />Select1 : ".$sql;
$res_usr = $mysqli->query($sql);
$row = $res_usr->fetch_array(MYSQLI_NUM);

$sql = "SELECT * FROM mygrt_usr_score";
//echo "<br />Select2 : ".$sql;
$res_usr_sc = $mysqli->query($sql);
$row2 = $res_usr_sc->fetch_array(MYSQLI_NUM);

//echo "<br />array 1 <br />";
//print_r($row);

//echo "<br />array 2 <br />";
//print_r($row2);



for ($i = 0; $i < $num; ++$i) {

    //echo "<br />".$i."  ----> ".$row2[$i];
   
    if (!empty($row2[$i])) {    
        $sql = "SELECT field_score from mygrt_score WHERE table_name = '".$row2[$i]."' AND field_value = '".$row[$i]."'";       //echo "<br />".$sql;
        //echo "<br />Select : ".$sql;
        $res_score = $mysqli->query($sql);
        $row3 = $res_score->fetch_array(MYSQLI_NUM);
        if (isset($row3[0])) {
            //echo "<br />score : ".$row3[0];
            $score=$score+$row3[0];
        }
    }
    
}


$mysqli->close();

//echo "<br />User : ".$login;
//echo "<br />Score : ".$score;
echo $score;
?>