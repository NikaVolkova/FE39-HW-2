<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>

<body>
<?php
//если была нажата кнопка Send
if($_REQUEST['ButtonSend']) {
 //если был использован метод POST
 if($_SERVER['REQUEST_METHOD']=='POST') {
  if((isset($_POST['fn']) && $_POST['em'] && $_POST['ms'] !="")) {
   //почта получателя
   $to = 'strakow14@gmail.com'; 
   //загаловок сообщения
   $subject = 'это сообщение послано смоего сайта сообщение'; 
   //сообщение в виде текста
   $name = $_POST['fn'];
   $email=$_POST['em'];
   $text=$_POST['ms'];
   $message="$name $email $text";
   //кодировка сообщения для текста
   $headers = "Content-type: text/plain; charset=utf-8 \r\n";
   //отправка письма
   mail($to, $subject, $message, $headers);
  }
 }
}
?>

</body>
</html>