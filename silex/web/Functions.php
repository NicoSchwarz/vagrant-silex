<?php
echo "Hello world!<br/>";
?>
<hr/>
<?php
function fak($i){
    if($i==0) {
    return 1;
    }
else{
    return ($i * fak($i-1));
}
}
if(isset($_GET['limit'])){
    $limit = $_GET['limit'];
}
else{
    $limit = 9;
}
for($i=0; $i<=$limit; $i++){
    echo "$i! = " . fak($i);
    echo "<br/>";
}
?>
<hr/>
<?php

echo "ASC: ";
$staedte = array(
    1 => "London",
    2 => "Warsaw",
    3 => "Berlin",
    4 => "Paris",
);


asort($staedte);
    echo implode(", ", $staedte);
echo"<br/> . <br/>";
echo "DESC: ";
arsort($staedte);
    echo implode(", ", $staedte);


?>

