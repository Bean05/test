<?

session_start();

$name = $_POST["name"];
$email = $_POST['email'];
$rate = $_POST['rate'];
$comment = $_POST['comment'];


if(strlen(trim($name)) <2 || strlen(trim($name))>15){
    $_SESSION['err'] = 'Введите корректное имя';
    header('Location: form1.php');

}else if(strlen(trim($comment)) > 200 || strlen(trim($comment))< 6){
    $_SESSION['err'] = 'Пожалуйста, оставьте отзыв!';
    header('Location: form1.php');
}else{
    $fd = fopen("result.txt", 'w');
    $data = 'Имя: '.$name.', email: '.$email.', оценка: '.$rate.', комментарий:'.$comment;
    fseek($fd, 0, SEEK_END);
    fputs($fd, $data);
    fclose($fd);
    header('Location: okay.php');

}




?>