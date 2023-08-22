<!--<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css">-->
<?php
include_once 'blocks/Header.php';
$color_r=(settype($_POST['color_r'], 'integer')&&$_POST['color_r']>0&&$_POST['color_r']<256)?$_POST['color_r']:0;
$color_g=(settype($_POST['color_g'], 'integer')&&$_POST['color_g']>0&&$_POST['color_g']<256)?$_POST['color_g']:0;
$color_b=(settype($_POST['color_b'], 'integer')&&$_POST['color_b']>0&&$_POST['color_b']<256)?$_POST['color_b']:0;
$massage = settype($_POST['massage'], 'string')? $_POST['massage']:' ';
?>
<div class="container mt-2 text-center">
    <form action="index.php" method="post">
        <input type="text" name="color_r" placeholder="Введите цвет R" class="form-control m-2">
        <input type="text" name="color_g" placeholder="Введите цвет G" class="form-control m-2">
        <input type="text" name="color_b" placeholder="Введите цвет B" class="form-control m-2">
        <textarea name="massage" class="form-control m-2" cols="20" rows="5" placeholder="Введите сообщение"></textarea>
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>
    <snan style="background:rgb(<?=$color_r?>, <?=$color_g?>, <?=$color_b?>); color:rgb(<?=$color_b?>, <?=$color_r?>, <?=$color_g?>)"><?php echo $massage?></snan>
</div>


