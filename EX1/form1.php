<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Поставьте оценку</h1>
    <div class="formBox">
        <form action="form.php" class="form" method="post">
            <label for="name">Ваше имя: </label>
            <input type="text"  name="name" id="name" required>
            <label for="email">Ваша почта: </label>
            <input type="email" id="email" name="email" required>
            <label for="rate">Поставьте оценку </label>
            <select name="rate" id="rate" required>
                <option value="">Выберите от 0 до 5</option>
                <option value="zero">0</option>
                <option value="one">1</option>
                <option value="two">2</option>
                <option value="three">3</option>
                <option value="four">4</option>
                <option value="five">5</option>
            </select>
            <label for="comment">Ваш комментарий: </label>
            <input type="text" required name="comment" id="comment"  minlength="5" maxlength="200">
            <button type="submit">Отправить</button>
            <?php 
            if(!empty($_SESSION['err'])){
                echo '<div class="err">'.$_SESSION['err'].'</div>';
            }else{
                echo '';
            };
            ?>
        </form>
    </div>
</body>
</html>