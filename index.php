
<?php
$d = date("D");

if ($d == "Fri") {
	echo "Have a nice !";
} elseif ($d == "Sun") {
	echo "Have a nice Sunday!";
} else {
	echo "Have a nice day!";
}

?>