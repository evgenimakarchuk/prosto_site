<?php require_once ("templates/top.php");
?>

    <div class="background"></div>

    <div class="cont">
        <div class="cont2">
            <img class="img" src="https://bipbap.ru/wp-content/uploads/2017/10/0_8eb56_842bba74_XL-640x400.jpg" alt="">
            <h3 class="headline">Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aspernatur corporis pariatur praesentium ex veniam tempora distinctio optio amet autem. Illo delectus laudantium quos dolorum recusandae ratione. Nesciunt nobis deserunt amet maxime doloremque dignissimos labore ab mollitia veniam veritatis adipisci, illo delectus. Magni explicabo necessitatibus velit, aut blanditiis quidem consectetur, eveniet officia repellat recusandae rerum neque veritatis ab alias! Optio asperiores voluptate fugit velit eum quod, beatae deserunt explicabo tenetur? Perferendis maiores quidem ullam aspernatur a aliquid repudiandae itaque magnam, porro, neque iusto accusamus nobis maxime excepturi soluta corrupti in similique at, autem sapiente! Sapiente laborum libero beatae aliquam voluptatum! Esse sapiente quo ea veritatis, vel quae sed placeat quisquam eligendi accusamus deleniti vitae eos fugit magni dolores, quasi nostrum, et tempora ut magnam necessitatibus cumque officiis ad sint. Et, quia laboriosam? Mollitia ab nam voluptas illum quibusdam libero accusantium ipsam minima odit nemo iste, harum exercitationem numquam facilis saepe excepturi et dolor quos tempore facere asperiores placeat dolorem inventore? Quis voluptatum, rem officiis perspiciatis enim illo in explicabo? Dolore ea consequatur quia obcaecati temporibus, dicta illum minus cum aliquid non dignissimos libero, voluptates laborum dolores et tempora delectus facilis. Suscipit atque ipsum omnis veniam nesciunt odit ab deleniti minima?</p>
        </div>
        <div class="cont2">
            <img class="img" src="https://bipbap.ru/wp-content/uploads/2017/10/0_8eb56_842bba74_XL-640x400.jpg" alt="">
            <h3 class="headline">Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aspernatur corporis pariatur praesentium ex veniam tempora distinctio optio amet autem. Illo delectus laudantium quos dolorum recusandae ratione. Nesciunt nobis deserunt amet maxime doloremque dignissimos labore ab mollitia veniam veritatis adipisci, illo delectus. Magni explicabo necessitatibus velit, aut blanditiis quidem consectetur, eveniet officia repellat recusandae rerum neque veritatis ab alias! Optio asperiores voluptate fugit velit eum quod, beatae deserunt explicabo tenetur? Perferendis maiores quidem ullam aspernatur a aliquid repudiandae itaque magnam, porro, neque iusto accusamus nobis maxime excepturi soluta corrupti in similique at, autem sapiente! Sapiente laborum libero beatae aliquam voluptatum! Esse sapiente quo ea veritatis, vel quae sed placeat quisquam eligendi accusamus deleniti vitae eos fugit magni dolores, quasi nostrum, et tempora ut magnam necessitatibus cumque officiis ad sint. Et, quia laboriosam? Mollitia ab nam voluptas illum quibusdam libero accusantium ipsam minima odit nemo iste, harum exercitationem numquam facilis saepe excepturi et dolor quos tempore facere asperiores placeat dolorem inventore? Quis voluptatum, rem officiis perspiciatis enim illo in explicabo? Dolore ea consequatur quia obcaecati temporibus, dicta illum minus cum aliquid non dignissimos libero, voluptates laborum dolores et tempora delectus facilis. Suscipit atque ipsum omnis veniam nesciunt odit ab deleniti minima?</p>
        </div>
    </div>

    <div id='conteiner_form' class="form">
        <form class="form__conteiner" 
              action="/index.php#conteiner_form" 
              method="post" >
              
     <?php
        
        if($_POST){
                
            $errors = array();
            if ($_POST['name'] == '') {
                $errors[] = 'Введите имя !';
            }
            if ($_POST['email'] == '') {
                $errors[] = 'Введите email !';
            }
            if ($_POST['text'] == '') {
                $errors[] = 'Введите text !';
            }
            if ($_POST['password'] == '') {
                $errors[] = 'Введите password !';
            }
            
            
            if (empty($errors)) {
                echo '<span class="error" style="color: green;font-weight: bold;                                                                              
                                        padding-bottom: 5px;">Текст успешно отправлен !</span>';   
                                        $query="INSERT INTO users values(null,
                                        '".$_POST['name']."',
                                        '".$_POST['email']."',
                                        '".$_POST['password']."',
                                        'user',
                                        NOW(),
                                        NOW())";
                                    if(!mysqli_query($link,$query)){
                                        exit($query);
                                    };              
            }else {
                echo '<span class="error" style="color: red;
                                   font-weight: bold;                                                                              
                                   padding-bottom: 5px;">'.$errors['0'].'</span>';
            }
        }
     ?>
      
        <div class="cont3">
            <input class="input"
                    type="text" 
                    placeholder="  Ваше имя" 
                    name="name"
                    value="<?php echo $_POST['name']; ?>" >
                       
            <input class="input" 
                    type="email" 
                    name="email" 
                    placeholder="  Ваш e-mail"
                    value="<?php echo $_POST['email']; ?>"> 
                       
            <input class="margin input" 
                    type="password" 
                    name="password" 
                    placeholder="  Ваш пароль" >
            <button class="button margin-top" type="submit" style="width: 100px">Отправить</button>           
        </div>
      
           
        <div class="cont3">
            <textarea class="textarea" 
                      name="text" 
                      id="" 
                      cols="" 
                      rows=""
                      placeholder="  Ваш текст..." ><?php echo $_POST['text']; ?></textarea>
        </div>     
         
        </form>
    </div

<?php
    $query="SELECT * FROM users ORDER BY lostvisit DESC limit 1 ";
    $result=mysqli_queri($link,$query);
        if (!$result){
            exit($query);
        }
        $arr_1 = mysqli_fetch_array($result);
        echo $arr_1['name'];
?>
<?php require_once ("templates/bottom.php");
?>

