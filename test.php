<?php
namespace infrajs\hash;
if (!is_file('vendor/autoload.php')) {
    chdir('../../../'); //Согласно фактическому расположению файла
    require_once('vendor/autoload.php');
}

$a = [];
$a[] = 'Привет';
$a[] = 'Пока';
$a[] = function(){};
$hash = Hash::make($a);
echo '<pre>';
if ($hash != '0c34ccc229612a159f7a877cd6eecad6') {
	echo '{result:0, msg:"значение поменялось"}';
	return false;
}
echo '{result:1}';