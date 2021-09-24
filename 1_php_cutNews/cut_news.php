<!DOCTYPE html>
<html>
<body>
<?php

  // начальные значения
  $link = 'https://livennov.ru/news/2021-09-21-pochti-40-tysyach-rubley-vernuli-zhitelyu-vyksy-posle-	pereraschyeta-oplaty-za-zhku/';
  $a = 'Этому способствовали представители Госжилинспекции
  Почти 40 тысяч рублей получил житель Выксы после того, как ему пересчитали оплату за жилищно-коммунальные услуги. Вопрос решился с участием Госжилинспекции. Об этом 21 сентября 2021 года сообщили представители пресс-службы губернатора и правительства Нижегородской области.

  В государственную жилищную инспекцию региона обратился житель многоэтажного дома из Выксы. Он пожаловался на неправомерное начисление ему оплаты за коммунальные услуги. В результате внеплановой проверки документов в выксунской управляющей компании ООО «Стройправдом» инспекторы ГЖИ выявили нарушения. В частности, мужчине отказали в распределении бремени с учётом доли совладельца жилья и в выдаче отдельного платёжного документа.

  В адрес местного ДУКа было направлено предписание об устранении нарушений. Повторная проверка показала, что все замечания, касающиеся случая, были устранены. В ДУКе произвели перерасчёт. Мужчине вернули 38 768 рублей.

  Ранее мы писали о том, что девятиклассница упала с 12-ого этажа дома в Выксе. Её тело нашли местные жители';
  
  $b = '';

  // вывод начальных значений
  echo('<u>Начальные данные:</u><br><br>');
  echo('link = "'.$link.'"<br><br>');
  echo('a = "'.$a.'"<br><br>');
  echo('b = "'.$b.'"<br><br>');

  // функция обрезки полной строки
  function CutWithLink($mes, $linkConst){
  	// меняем кодировку так как могут возникнуть знаки вопроса на конце обрезанной строки
	$res = iconv('UTF-8','windows-1251',$mes); 
	$res = trim(substr($res ,0,179)); 
	$res = iconv('windows-1251','UTF-8',$res );
    
    // разделяем на слова, находим два последних и заменяем их ссылкой
    $wordsArray = explode(' ',$res);
    $wordsCount = count($wordsArray);
    $lastTwoWords = $wordsArray[$wordsCount - 2].' '.$wordsArray[$wordsCount - 1];
    $lastTwoWordsLinked = '<a href="'.$linkConst.'">'.$lastTwoWords.'...</a>';
    $res = str_replace($lastTwoWords, $lastTwoWordsLinked, $res);
  	return $res;
  }
  
  // результат работы
  $b = CutWithLink($a, $link);
  echo('<u>Результат:</u><br><br>b = "'.$b.'"<br><br>');  

?>
</body>
</html>
