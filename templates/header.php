
        <?php 
        session_start();
        if(isset($_SESSION["user_id"])){
                echo '
                <a href="http://phpsite/logout.php" class="button">Выход из учетной записи</a>';
                echo '
                <a href="http://phpsite/add_assignment.php" class="button" style="margin-right: 10px;">Добавить задание</a>'; 
        }else{
                echo '
                <a href="http://phpsite/login.php" class="button" style="margin-right: 10px;">Войти</a>
                <a href="http://phpsite/register.php" class="button" style="margin-right: 10px;">Зарегистрироватся</a>';      
        }
        ?>