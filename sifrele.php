<?php



echo "By eSckRal\n";
echo "Kelimeyi giriniz:";
if($plaintext == help){
echo "Kelimeyi giriniz yazan yere crypt etmek istediğiniz kelimeyi girip enterleyiniz.";

}
$plaintext = trim(fgets(STDIN, 1024));
$ciphertext = md5($plaintext);
$result = md5($ciphertext);

echo "Sonuc:";
echo "$result\n";









?>
