<?php
//deklarasi variabel nama
$nama = "Fathir";

//membuat fungsi panggil nama
function getNama(){
    global $nama;
    echo $nama;
}
//memanggil fungsi
getNama();
?>