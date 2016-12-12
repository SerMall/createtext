<!DOCTYPE html>
<html>
<head>
    <title>sm.codetest.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<body>
<div class="wrapper container">
    <header></header>
    <nav class="navbar navbar-default">
        <ul class="nav navbar-nav">
            <?php  if($page == 'home'){  ?>
                <li><a href='index.php'>Home</a></li>
                <li><a href="index.php?about=about">Про себе</a></li>
            <?php    }else{    ?>
                <li><a href='article.php'>Home</a></li>
                <li><a href='article.php?create=create'>Створити статтю</a></li>
                <li><a href="article.php?about=about">Про себе</a></li>
            <?php     } ?>
        </ul>
    </nav>
