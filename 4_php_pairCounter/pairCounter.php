<!DOCTYPE html>
<html>
<body>
<?php
	$arrayLen = 100;
	$arrayNum = array();
    
    // заполнение массива случайными числами и вывод
    $res = '';    
    for($i = 0; $i < $arrayLen; $i++){
    	array_push($arrayNum, random_int(-5, 5));
        $res = $res.$arrayNum[$i];
        if ($i < $arrayLen - 1){
        	$res = $res.',';
        }
        if (($i + 1) % 10 == 0){
        	$res = $res.'<br>';
        }
    }
	echo('<u>Заданный массив :</u><br>'.$res.'<br><br>');
    
    $dublicateCounter = 0;
    for($i = 0; $i < $arrayLen - 1; $i++){
        if ($arrayNum[$i] == $arrayNum[$i + 1]){
        	$dublicateCounter++;
        }
    }
	echo('<u>Количество последовательных пар одинаковых элементов :</u> '.$dublicateCounter.'<br><br>');    
?>
</body>
</html>
