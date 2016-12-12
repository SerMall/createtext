<?php
$servername = "localhost";
$username = "root";
$password = "1";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS codetest";
if ($conn->query($sql) === FALSE) {
    echo "Error creating database: " . $conn->error;
}

$db = "codetest";
$conndb = new mysqli($servername, $username, $password, $db);
if (!$conndb) {
    echo 'Could not select database';
}

$sqltable = "CREATE TABLE IF NOT EXISTS  articles (
                      id INT  AUTO_INCREMENT PRIMARY KEY ,
                      author VARCHAR( 100 ) NOT NULL ,
                      title VARCHAR( 200 ) NOT NULL ,
                      date DATE NOT NULL ,
                      content TEXT NOT NULL
        ); ";

if ($conndb->query($sqltable) === FALSE) {
    echo "Error creating database: " . $conn->error;
}

$sqlquery = "SELECT * FROM articles NUMBER ";
if(!$conndb->query($sqlquery)->num_rows){
    $sqltext = "INSERT INTO articles (author, title, date, content)
                VALUES ('Soft-Group',
                        'Тестове завдання',
                        '2016.12.05',
                        '<P ALIGN=CENTER STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#333333\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4><B>Вступне
	тестове завдання на курси PHP</B></FONT></FONT></FONT></P>
	<P ALIGN=CENTER STYLE=\’margin-bottom: 0in; line-height: 100%\’><BR>
	</P>
	<P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4><I><B>Опис:</B></I></FONT></FONT></FONT></P>
	<P LANG=\’ru-RU\’ STYLE=\’margin-bottom: 0in; line-height: 100%\’><BR>
	</P>
	<P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>Тестове
	завдання являє собою міні-сайт, розроблений
	на PHP. Оцінюється кількістю балів
	відповідно до вимог. </FONT></FONT></FONT>
	</P>
	<P STYLE=\’margin-bottom: 0in; line-height: 100%\’><BR>
	</P>
	<P STYLE=\’margin-bottom: 0in; line-height: 100%\’><A NAME=\’_GoBack\’></A>
	<FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4><I><B>Виконане
	тестове завдання потрібно відправити
	в одному архів</B></I></FONT></FONT></FONT><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4><SPAN LANG=\’ru-RU\’><I><B>і!</B></I></SPAN></FONT></FONT></FONT></P>
	<P STYLE=\’margin-bottom: 0in; line-height: 100%\’><BR>
	</P>
	<P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4><I><U>Завдання
	№1:</U></I></FONT></FONT></FONT></P>
	<UL>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>ПІП,
	рік народження;</FONT></FONT></FONT></P>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>зручний
	для відвідування курсів час (якщо
	принципово).</FONT></FONT></FONT></P>
	</UL>
	<P STYLE=\’margin-bottom: 0in; line-height: 100%\’><BR>
	</P>
	<P STYLE=\’margin-bottom: 0in; line-height: 100%\’><BR>
	</P>
	<P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4><I><U>Завдання
	№2:</U></I></FONT></FONT></FONT></P>
	<OL>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>Розробити
	сайт, на якому можна &nbsp;створювати
	статті. ( 5 балів )</FONT></FONT></FONT></P>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>Використати
	систему контролю версій git ( + 2 бали )</FONT></FONT></FONT></P>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>Використовувати
	Базу даних MySql для збереження даних ( +
	2 балів )</FONT></FONT></FONT></P>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>Використати
	Javascript бібліотеку (jQuery, AngularJS, тощо) ( + 1
	бал )</FONT></FONT></FONT></P>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>Використати
	FrontEnd framework (наприклад </FONT></FONT></FONT><A HREF=\’http://getbootstrap.com/\’><FONT COLOR=\’#1155cc\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4><U>Bootstrap</U></FONT></FONT></FONT></A><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>)
	( + 1 бал )</FONT></FONT></FONT></P>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>Розробити
	2 точки входу в міні сайт:</FONT></FONT></FONT></P>
	</OL>
	<OL TYPE=a>
	<OL>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>створення
	статті (форма) з полем назва статті та
	полем текст статті. + 1 бал, якщо в тексті
	можна писати html код. ( + 3 бали )</FONT></FONT></FONT></P>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>перегляд
	переліку статей, як головна сторінка
	( + 2 бали )</FONT></FONT></FONT></P>
	</OL>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>Будь
	яка ініціатива може бути додатково
	оцінена</FONT></FONT></FONT></P>
	</OL>
	<P STYLE=\’margin-bottom: 0in; line-height: 100%\’><BR>
	</P>
	<P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4><I>Примітки:</I></FONT></FONT></FONT></P>
	<P STYLE=\’margin-bottom: 0in; line-height: 100%\’><BR>
	</P>
	<UL>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>Якщо
	використовуєте базу даних, підключитися
	можна за допомогою бібліотеки </FONT></FONT></FONT><A HREF=\’http://php.net/manual/ru/mysqli.construct.php\’><FONT COLOR=\’#1155cc\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4><U>mysqli</U></FONT></FONT></FONT></A><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>
	або </FONT></FONT></FONT><A HREF=\’http://php.net/manual/ru/pdo.construct.php\’><FONT COLOR=\’#1155cc\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4><U>PDO</U></FONT></FONT></FONT></A><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>.</FONT></FONT></FONT></P>
	</UL>
	<UL>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>Якщо
	важко використати Базу даних, то
	використати файли. Для запису можна
	використати функцію </FONT></FONT></FONT><A HREF=\’http://php.net/manual/ru/function.file-put-contents.php\’><FONT COLOR=\’#1155cc\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4><U>file_put_contents</U></FONT></FONT></FONT></A><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>,
	для зчитування </FONT></FONT></FONT><A HREF=\’http://php.net/manual/ru/function.file-get-contents.php\’><FONT COLOR=\’#1155cc\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4><U>file_get_contents</U></FONT></FONT></FONT></A><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>.
	</FONT></FONT></FONT>
	</P>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>Відіслати
	потрібно не код, а посилання на віддалений
	репозиторій bitbucket.org або github.com, якщо ви
	будете використовувати систему контролю
	версій</FONT></FONT></FONT></P>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>Під
	поняттям точка входу розуміється 2
	окремих php файли. Для прикладу index.php i
	article.php</FONT></FONT></FONT></P>
	<LI><P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4>Якщо
	важко встановити і розгорнути PHP, Apache
	i MySQL, то використати готове програмне
	забезпечення (bitnami, XMPP, WAMP, denwer).</FONT></FONT></FONT></P>
	</UL>
	<P STYLE=\’margin-bottom: 0in; line-height: 100%\’><BR>
	</P>
	<P STYLE=\’margin-bottom: 0in; line-height: 100%\’><FONT COLOR=\’#000000\’><FONT FACE=\’Times New Roman, serif\’><FONT SIZE=4><B>На
	виконання тестового завдання в вас є
	6 днів.</B></FONT></FONT></FONT></P>')";

    if ($conndb->query($sqltext) === FALSE) {
        echo "Error creating First text: " . $conn->error;
    }

}


?>