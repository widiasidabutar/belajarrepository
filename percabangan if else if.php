<html>
    <body>
        <?php
        //program 1
         $nilai = 70;
         if($nilai >= 90){
         echo "Kamu Mendapatkan A"; 
     }else if ($nilai >= 70){
         echo "Kamu Meendapatkan B";     
     }else{
         echo "Kamu Tidak Lulus";        
     }

     // program 2
     echo "<br>";
     $tinggi = 170;
     if($tinggi >= 180){
     echo "Kamu Tinggi"; 
 }else if ($tinggi >= 170){
     echo "Kamu Kurang Tinggi";     
 }else{
     echo "Kamu Tidak Tinggi";        
 }

 // program 3
 echo "<br>";
 $hargalaptop = 10000000;
        if($hargalaptop >= 20000000){
        echo "Laptop Kamu Mahal";    
}elseif ($hargalaptop >= 10000000){
    echo "Laptop Kamu Cukup Mahal";   

}

else{
    echo "Laptop Kamu Murah";     
}

// program 4
echo "<br>";
$status="Lampu Kuning";
	if($status == "Lampu Hijau"){
		echo "Silahkan Jalan";
    }else if($status == "Lampu Kuning"){
		echo "Hati-hati";
	}else if($status == "Lampu Merah"){
		echo "Berhenti";
	}
    else{
        echo  "Hubungi Petugas";
    }

    // program 5
    echo "<br>";
    $teman = "widia";
if($teman == "tina"){
	echo "tina adalah teman saya";
}elseif($teman == "widia"){
	echo "widia adalah teman saya";
}else{
	echo "Dia Bukan Teman Saya";
}





        ?>
    </body>
</html>