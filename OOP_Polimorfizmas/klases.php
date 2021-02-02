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
    
    public function printPhotosLink(){
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
    }

}

class ShortArticle extends Article {

    public function printItem() {
        echo "<br> <h3>" . $this->title . "</h3>";
        echo '<br>' . $this->type;
        echo "<br> <small>" . $this->author . "</small>";
        echo "<br> <small>" . $this->addDate . "</small>";
    }

}

class PhotoArticle extends Article {

    public function printItem() {
        echo "<br> <h3>" . $this->title . "</h3>";
        echo '<br>' . $this->type;
        echo "<br> <small>" . $this->author . "</small>";
        echo '<br>' . $this->shortContent;
        echo "<br> <small>" . $this->addDate . "</small>";
        echo "<br> <img src=" . $this->preview . ">";
    }

}
