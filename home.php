<div class='jumbotron'>
    <blockquote>
        <p>
            Вітаю! Це тестове завдання PHP
        </p>
        <?php
            if($page === 'home'){
                echo "<small>Щоб створити статтю скористайтеся іншою точкою входу /article.php</small>";
            }else{
                echo "<small>Тут Ви можете створити статтю </small>";
            }
        ?>
    </blockquote>
</div>
