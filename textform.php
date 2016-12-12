
<div class='jumbotron'>
    <blockquote>
        <p>
        <form id="text-form" action="article.php" method="post">
            <p>Ваше ім'я: <input id="author" type="text" name="author" required /></p>
            <p>Заголовок: <input id="title" type="text" name="title" required /></p>
            <p>Текст: <textarea id="content" type="textarea" name="content" required ></textarea></p>
            <p><input id="date" type="date" name="date" value="<?php echo date("Y-m-d") ?>" hidden/></p>
            <p><input type="submit" name="text_article"/></p>
        </form>
        </p>
    </blockquote>
</div>

