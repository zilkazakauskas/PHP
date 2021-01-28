<?php

class Article{
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

}

class NewsArticle extends Article{
    public function printItem() {
        echo "<br> <h3>". $this->title ."</h3>";
        echo '<br>' . $this->type;
        echo "<br> <small>" . $this->author . "</small>";
        echo '<br>' . $this->content;
        echo "<br> <small>" . $this->addDate . "</small>";
    }
}

class ShortArticle extends Article{
    public function printItem() {
        echo "<br> <h3>". $this->title ."</h3>";
        echo '<br>' . $this->type;
        echo "<br> <small>" . $this->author . "</small>";
        echo "<br> <small>" . $this->addDate . "</small>";
    }
}

class PhotoArticle extends Article{
    public function printItem() {
        echo "<br> <h3>". $this->title ."</h3>";
        echo '<br>' . $this->type;
        echo "<br> <small>" . $this->author . "</small>";
        echo '<br>' . $this->shortContent;
        echo "<br> <small>" . $this->addDate . "</small>";
        echo "<br> <img src=". $this->preview .">";
        
    }
}
