

<?
	$subject = "Заявка на детские часы q60 Компания Babywatch Russia"; 
  mail ("0063233@gmail.com,urazovsky92@yandex.ru",
        $subject,
		"<br>Форма: ".$_POST['af_action'].
		"<br>Имя: ".$_POST['name'].
		"<br>Телефон: ".$_POST['phone'].
		"<br>Вопрос: ".$_POST['message'], "Content-type: text/html; charset=utf-8 \r\n");
  

?>


