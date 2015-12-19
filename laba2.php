<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<?php
$k=0;
$baza[0] = array (
'Фамилия' => "Davit",
'Name' => "Mikeladze",
'пол' => "m",
'год рождения'  => 1992
      );

$baza[1] = array (
'Фамилия' => "Ilin",
'Name' => "Maxim",
'пол' => "m",
'год рождения'  => 1995
      );	
	  
$baza[2] = array (
'Фамилия' => "Mahmutov",
'Name' => "Il'ya",
'пол' => "m",
'год рождения'  => 1995
      );
$baza[3] = array (
'Фамилия' => "Shtykov",
'Name' => "Alexander",
'пол' => "m",
'год рождения'  => 1994
      );
$baza[4] = array (
'Фамилия' => "SHvetsova",
'Name' => "Daria",
'пол' => "w",
'год рождения'  => 1995
      );
$baza[5] = array (
'Фамилия' => "Birukov",
'Name' => "Sergey",
'пол' => "m",
'год рождения'  => 1996
      );
$baza[6] = array (
'Фамилия' => "Bedretdinova",
'Name' => "Ania",
'пол' => "w",
'год рождения'  => 1995
      );
$baza[7] = array (
'Фамилия' => "Tiuleneva",
'Name' => "Irina",
'пол' => "w",
'год рождения'  => 1995
      );

for ($i=0;$i<8;$i++)	 { 
if ($baza[$i]['пол']=="w"){
echo"'<br/>'Imia:";
echo 	$baza[$i]["Name"];
echo"<br/>'Familia:";
echo $baza[$i]["Фамилия"];
echo"<br/>'Pol:";
echo $baza[$i]["пол"	].'<br/>';
$k++;
}
}
echo "'<br/>'Studentov s mujskim polom ", " = ", $k.'<br/>';
?>
</body>
</html>
