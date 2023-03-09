<?php
$nama = "Tatsuo Hasegawa";
$nama1 = "Mohamad Lutfi Ismail";
$nama2 = "Muhammad Sumbul";

echo "Perkenalkan, nama saya adalah ".$nama;

function perkenalan($nama){
    echo"<br>";
    echo "Perkenalkan, nama saya adalah ".$nama;
}

perkenalan($nama1);
perkenalan($nama2);
perkenalan(5321);


?>