<?php require_once ("templates/top.php");
?> 

<?php
 if(isset($_SESSION['user_id'])){
     echo 'Пользователь';
     echo $duta_user['name'];
 }else{
     echo "Ошибка входа";
 }
?>
<div><h1>Личный кабинет</h1></div>
<form class="form" action="" method="SESSION" >
    <input class="input"type="text" placeholder="" name="">
    <textarea class="textarea" 
                      name="text" 
                      id="" 
                      cols="" 
                      rows=""
                      placeholder="  Ваш комментарий..." ><?php echo $_POST['text']; ?></textarea>
    <button class="button margin-top" type="submit" style="width: 100px">Отправить</button>
</form>





<?php require_once ("templates/bottom.php");
?>