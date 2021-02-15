<?php

class Article {

    protected $id;
    protected $author;
    protected $shortContent;
    protected $content;
    protected $publishDate;
    protected $type;
    protected $title;
    protected $addDate;
    protected $preview;

    function __construct($row) {
        $this->id = $row['id'];
        $this->author = $row['author'];
        $this->shortContent = $row['shortContent'];
        $this->content = $row['content'];
        $this->publishDate = $row['publishDate'];
        $this->type = $row['type'];
        $this->title = $row['title'];
        $this->addDate = $row['addDate'];
        $this->preview = $row['preview'];
    }

    public function printPhotosLink() {
        echo "<br> <a href='preview_photos.php?id=$this->id'>Daugiau nuotrauku</a>";
    }

    public function printAllContentLink() {
        echo "<br> <a href='all_content_print.php?id=$this->id'>Visa straipsnio info</a>";
    }

    public function printAllArticleContent() {
        echo "<br> <h3>" . $this->title . "</h3>";
        echo '<br>' . $this->author;
        echo '<br>' . $this->shortContent;
        echo '<br>' . $this->content;
        echo '<br>' . $this->publishDate;
        echo '<br>' . $this->type;
        echo '<br>' . $this->addDate;
        echo "<br> <img src=" . $this->preview . "><br>";
    }

}

class NewsArticle extends Article {

    public function printItem() {
        echo "<br> <h3>" . $this->title . "</h3>";
        echo '<br>' . $this->type;
        echo "<br> <small>" . $this->author . "</small>";
        echo '<br>' . $this->content;
        echo "<br> <small>" . $this->addDate . "</small>";
        if (isset($_COOKIE['vartotojas'])) {
            if ($_COOKIE['role'] == 'standart' || $_COOKIE['role'] == 'author' && $this->author != $_COOKIE['vardas']) {
                echo "<p><button><a style= 'text-decoration: none' href='komentaro_forma.php?id=$this->id'>Rasyti komentara</a></button></p>";
            }
            if ($_COOKIE['role'] == 'admin') {
                echo "<p><button><a style= 'text-decoration: none' href='delete_article.php?id=$this->id'>Istrinti straipsni</a></button></p>";
            }
        }
    }

    public function printArticleCommentCount() {
        require 'sql_connection.php';
        $sql = "SELECT comment FROM user_article_comment WHERE article_id=$this->id";
        $result = mysqli_query($link, $sql);
        echo "<br><strong>Komentaru skaicius: </strong>" . mysqli_num_rows($result)."<br>";
    }
    
    public function printUpdateDate() {
        require 'sql_connection.php';
        $sql =  "SELECT updateDate FROM articles WHERE id=$this->id";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        echo '<p style="color: red;">Atnaujinta: '. $row['updateDate'].'</p>';
    }

}

class ShortArticle extends Article {

    public function printItem() {
        echo "<br> <h3>" . $this->title . "</h3>";
        echo '<br>' . $this->type;
        echo "<br> <small>" . $this->author . "</small>";
        echo "<br> <small>" . $this->addDate . "</small>";
        if (isset($_COOKIE['vartotojas'])) {
            if ($_COOKIE['role'] == 'standart' || $_COOKIE['role'] == 'author' && $this->author != $_COOKIE['vardas']) {
                echo "<p><button><a style= 'text-decoration: none' href='komentaro_forma.php?id=$this->id'>Rasyti komentara</a></button></p>";
            }
            if ($_COOKIE['role'] == 'admin') {
                echo "<p><button><a style= 'text-decoration: none' href='delete_article.php?id=$this->id'>Istrinti straipsni</a></button></p>";
            }
        }
    }

    public function printArticleCommentCount() {
        require 'sql_connection.php';
        $sql = "SELECT comment FROM user_article_comment WHERE article_id=$this->id";
        $result = mysqli_query($link, $sql);
        echo "<br><strong>Komentaru skaicius: </strong>" . mysqli_num_rows($result)."<br>";
    }
    
    public function printUpdateDate() {
        require 'sql_connection.php';
        $sql =  "SELECT updateDate FROM articles WHERE id=$this->id";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        echo '<p style="color: red;">Atnaujinta: '. $row['updateDate'].'</p>';
    }

}

class PhotoArticle extends Article {

    public function printItem() {
        echo "<br> <h3>" . $this->title . "</h3>";
        echo '<br>' . $this->type;
        echo "<br> <small>" . $this->author . "</small>";
        echo '<br>' . $this->shortContent;
        echo "<br> <small>" . $this->addDate . "</small>";
        echo "<br> <img src=" . $this->preview . "><br>";
        if (isset($_COOKIE['vartotojas'])) {
            if ($_COOKIE['role'] == 'standart' || $_COOKIE['role'] == 'author' && $this->author != $_COOKIE['vardas']) {
                echo "<p><button><a style= 'text-decoration: none' href='komentaro_forma.php?id=$this->id'>Rasyti komentara</a></button></p>";
            }
            if ($_COOKIE['role'] == 'admin') {
                echo "<p><button><a style= 'text-decoration: none' href='delete_article.php?id=$this->id'>Istrinti straipsni</a></button></p>";
            }
        }
    }

    public function printArticleCommentCount() {
        require 'sql_connection.php';
        $sql = "SELECT comment FROM user_article_comment WHERE article_id=$this->id";
        $result = mysqli_query($link, $sql);
        echo "<br><strong>Komentaru skaicius: </strong>" . mysqli_num_rows($result)."<br>";
    }
    
    public function printUpdateDate() {
        require 'sql_connection.php';
        $sql =  "SELECT updateDate FROM articles WHERE id=$this->id";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        echo '<p style="color: red;">Atnaujinta: '. $row['updateDate'].'</p>';
    }

}
