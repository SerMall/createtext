<?php

Class Text {




    public function queryArticle() {
        if ($this->conndb()) {
            $sql = "SELECT * FROM articles";
            return  $this->conndb()->query($sql);
        }else{
            return 'Could not select database';
        }
    }

    public function conndb() {
        return new mysqli('localhost', 'root', '1', 'codetest');
    }

    public function getArticle() {
        $result = $this->queryArticle();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $texts[] = $row;
            }
        } else {
            return "0 results";
        }
        return $texts;
    }

    public function getArticleId($id){
        foreach ($this->getArticle() as $text) {
            if ($text['id'] == $id) {
                return $text;
            }
        }
    }

    public function saveArticle($data=array()) {
        $sql = "INSERT INTO articles (author, title, date, content)
                VALUES ('$data[author]', '$data[title]', '$data[date]', '$data[content]')";
        if($this->conndb()->query($sql)){
            echo "Шановний $data[author], Ваша стаття збережена";
        } else{
            echo "ERROR: Не вдалося зберегти статтю";
        }
    }





//        $result = $this->queryArticle();
//        if ($result->num_rows > 0) {
//            // output data of each row
//            while($row = $result->fetch_assoc()) {
//                $texts[] = $row;
//                //        echo "id: " . $row["id"]. " - author: " . $row["author"]. "</br> " . $row["content"]. "<br><br>";
//            }
//        } else {
//            return "0 results";
//        }
//        return $texts;

//    }


}