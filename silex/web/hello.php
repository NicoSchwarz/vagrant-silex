<?php
echo "Hello World!";
echo "<br/>";
echo "The server time is " . time() . ".";?>
<hr/>
<?php
for($a = 0; $a <= 9; $a++) {
	if($a % 2)
	{echo $a . " is odd<br/>";}
	else
	{echo $a . " is even<br/>";};
};
?>
<hr/>
<?php
$capitals = [
	"Germany" => "Berlin",
	"France" => "Paris",
	"Belgium" => "Brussels",
];
foreach ($capitals as $key => $value) {
echo "The capital of " . $key . " is " . $value . " . <br/>";
};
?>