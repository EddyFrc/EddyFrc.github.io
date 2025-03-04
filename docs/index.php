<?php

// $file = fopen("inventory.csv", "r");
// $inventaire = [];

// fgets($file);
// do {
//   $temp = explode(";", rtrim(fgets($file)));
//   print "<a href=\"#$temp[0]\" class=\"$temp[1]-item\"";
// } while (!feof($file));

// var_dump($inventaire);
$controller = $_GET['page'] ?? 'profil';

require_once "controler/$controller.ctrl.php";