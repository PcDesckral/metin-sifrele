<?php
echo "By eSckRal\n";
echo "Modulununu Seciniz:";


switch ($sec = trim(fgets(STDIN, 1024)) {



case 1:
echo "MD5 Sifreler."
$plaintext = trim(fgets(STDIN, 1024));
$ciphertext = md5($plaintext);
$result = md5($ciphertext);
echo "Sonuc:";
echo "$result\n";
break;

}



?>
