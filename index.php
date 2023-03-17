
<?php
//VARIABEL
//variabel string
$namaDepan = 'iko';
$namaBelakang = 'uropmabin';

echo $namaDepan;
echo $namaBelakang;

//gabung string
echo $namaLengkap = '<p>'.$namaDepan .''. $namaBelakang .'</p>';

//variabel integer
$x = 10;
$y = 70;


// - = operasi pengurangan
// * = operasi perkalian
// / = operasi pembagian
// + = operasi pertambhan
// % = hasil bagi


$penjumlahan = $x + $y;
echo '<p>'.$penjumlahan.'</p>';


//operasi perkalian
$x = 20;
$y = 30;

$perkalian = $x * $y;
echo'<p>'.$perkalian.'</p>';

//operasi pengurangan
$x =100;
$y = 79;

$pengurangan = $x-$y;
echo'<p?>'.$pengurangan.'</p>';

//operasi pembagian
$x = 60;
$y = 24;

$pembagian = $x / $y;
echo'<p>'.$pembagian.'</p>';


$hasilbagi = $x / $y;
echo'<p>'.$hasilbagi.'</p>';


// operator percabangan atau if else
//90 = A
//80 = B
//70 = C
//60 = D

$nilai = 78;

if(90 < $nilai)
{
    echo '<p> Selamat '.$namaLengkap.'</p>';
    echo'<p> Anda Mendapatkan Nilai A </p>';

}else if(80<= $nilai){
    echo '<p> Selamat '.$namaLengkap.'</p>';
    echo'<p> Anda Mendapatkan Nilai B</p>';
}else if(70<= $nilai){
    echo '<p> Selamat '.$namaLengkap.'</p>';
    echo'<p> Anda Mendapatkan Nilai C</p>';
}else if(60<= $nilai){
    echo '<p> Selamat '.$namaLengkap.'</p>';
    echo'<p> Anda Mendapatkan Nilai D </p>';
}else{
    echo '<p> Selamat '.$namaLengkap.'</p>';
    echo'<p> Anda Mendapatkan Nilai  E </p>';
}


//pengulangan
//for
//while
//foreach


echo "<h1> Bilangan Ganjil </h1>";
for ($i=2; $i<= 100; $i++) { 
    if($i % 2 !== 0)
    
    {

        echo $i. ',';

    }

    
}

echo "<h1> Bilangan Genap </h1>";
for ($i=0; $i<= 100; $i++) { 
    if($i % 2 !== 1)
    
    {

        echo $i. ',';

    }
}



//PERULANGAN FOR
for($bil = 1; $bil <= 10; $bil++){
    if( ($bil % 2) == 0){
        echo "$bil Adalah Bilangan Genap<br>";
    }else {
		echo "$bil Adalah Bilangan Ganjil<br>";
	}	
}
?>