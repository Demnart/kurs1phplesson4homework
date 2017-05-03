<?php
header("/index.php");
if (isset($_POST['variable1']) && isset($_POST['variable2'])){
    $variable1 =(int)$_POST['variable1'];
    $variable2 =(int)$_POST['variable2'];
    $znak= $_POST['select'];
    $result = 0;
    switch ($znak){
        case '+':
            $result = $variable1 + $variable2;
            break;
        case '-':
            $result = $variable1 -  $variable2;
            break;
        case  '*':
            $result = $variable1 * $variable2;
            break;
        case '/':
            if (0 == $variable2){
                echo 'На ноль делить нельзя';
            }
            $result =  $variable1 / $variable2;
            break;
        case '%':
            $result = $variable1 % $variable2;
            break;
        default:
            echo "Ошибка";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="text" name="variable1">
    <select name="select" id="1">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
        <option value="%">%</option>
    </select>
    <input type="text" name="variable2">
    <input type="submit" value="=">
    <?php echo $result;?>
</form>
</body>
</html>
