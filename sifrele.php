<?php



echo "By eSckRal" . '<br>';
echo "Kelimeyi giriniz:";
$plaintext = trim(fgets(STDIN, 1024));
$ciphertext = md5($plaintext);
$result = md5($ciphertext);


echo $result;









?>
