<?php require_once('templates/top.php');

    if($_POST){
        $email=$_POST['email'];
        $password=$_POST['password'];
    $query="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $usr= mysqli_query($link,$query);
        if(!$usr){
            exit($query);
        }
        $user=mysqli_fetch_array($usr);
            if($user['id']){
                // print_r($_POST);
                $_SESSION['user_id']=$user['id'];
        $query="UPDATE users set lastvisit= NOW() WHERE id=".$user['id'];
                if(!mysqli_query($link,$query)){
                    exit($query);
                }
            ?>
                <script>
                document.location.href='cabinet.php';
                </script>
            <?php
            }else{
                echo 'Пользователь не найден';
            }
    }
    ?>
<div class="form">
    <form class="form__conteiner" 
          action="/login.php" 
          method="post" 
          style="flex-direction: column;">
        <?php
        if($_POST){
            $errors = array();
            if ($_POST['email'] == '') {
                $errors[] = 'Введите email !';
            }
            if ($_POST['password'] == '') {
                $errors[] = 'Введите password !';
            }

            if (empty($errors)) {
                echo '<span class="error" style="color: red;font-weight: bold;                                                                              
                padding-bottom: 5px;">'.$errors['0'].'</span>';
            }
        }
        ?>
        <div class="cont3">
                <input class="input" 
                       type="email" 
                       name="email" 
                       placeholder="Ваш e-mail" >
                <input class="margin input" 
                       type="password" 
                       name="password" 
                       placeholder="Ваш пароль" >
        </div>
        <button class="button margin-top" type="submit" style="width: 80px;">Вход</button>
    <form>
</div> 
<?php require_once('templates/bottom.php'); ?>          