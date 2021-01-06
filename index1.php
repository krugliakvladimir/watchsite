<?php
$name = $_POST['name'];
$subject = $_POST['email'];
$theme= $_POST['theme'];
$phone= $_POST['phone'];

$message="Тема : $theme \r\nИмя : $name  \r\n Email : $subject \r\n Телефон : $phone";


$to = 'kruhliakvolodymyr@gmail.com';
$headers = 'From: kruhliak@examplelanding.zzz.com.ua' . "\r\n";

mail($to, $subject, $message, $headers, $theme);

echo "<p>Уважаемый(ая) <b>$name</b> Ваше письмо отправленно успешно. <br> Спасибо! <br>Вам скоро перезвонят.</p>";

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>С вами свяжутся</title>
<meta name="generator">
<style type="text/css">
body
{
	font-family:Arial, sans-serif;
	background: #2a3640;
	color: #fff;
	font-size: 50px;
	text-align: center;
	padding-top: 15%;
	
}
b{
	color: #00d646;
}
@media only screen and (max-width: 480px) {
	body
{
	font-size: 32px;
}
}
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script>
</head>
<body>
</body>
</html>