<div class="heading"><h1>Тестове завдання PHP</h1></div>
<div class="row">
    <aside class="col-md-3">
        <ul class="list-group submenu">
            <li class="list-group-item active">СТАТТІ</li>
            <?php
            include_once('textclass/text.php');
            $sql = "SELECT * FROM articles";
            $result = $conndb->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $texts[] = $row;
                }
            } else {
                echo "Статтей ще немає";
            }
            if($texts){
                foreach($texts as $text){
                    ?>
                    <li class="list-group-item"><a href="index.php?text_id=<?php echo $text['id']; ?>"> <?php echo $text["title"];?></a></li>
                <?php
                }
            }

            ?>
        </ul>
    </aside>
    <section class="col-md-17">
        <div class="content-area">