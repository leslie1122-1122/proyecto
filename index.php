<?php
require_once('perro.php');

$perrito=new perro("1","firu","5 cm");
echo $perrito->getid();
echo "<br>";
echo $perrito->getnombre();
echo "<br>";
echo $perrito->gettamaño_bigote();
echo "<br>";
