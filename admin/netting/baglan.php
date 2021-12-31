<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=eceakgunav_demo;charset=utf8",'eceakgunav_demo','asdzxcqwe21');
//	echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}

 ?>