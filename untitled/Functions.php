<?php
echo "Hello world!<br/>";
?>
<hr/>
<?php
function fak($i)
{
    if($i==0) {
    return 1;
    }
else{
    return ($i * fak($i-1));
}
return ergebnis;
}
for($i=0; $i<=9; $i++){
    echo "$i! = " . fak($i);
    echo "<br/>";
}
?>
<hr/>
<?php
$staedte = array(
    1 => "London",
    2 => "Warsaw",
    3 => "Berlin",
    4 => "Paris",
);

asort($staedte);
foreach($staedte as $key => $val){
    echo"$val, ";
}
echo"<br/> . <br/>";
arsort($staedte);
foreach($staedte as $key => $val){
    echo"$val, ";
}

?>

