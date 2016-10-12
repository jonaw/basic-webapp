<?php
class NewsArticleComment implements INewsArticleComment{
    private $id;
    private $body;
    private $author;
    private $createDateTime;
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getBody(){
        return $this->body;
    }
    public function setBody($body){
        $this->body = $body;
    }

    public function getAuthor(){
        return $this->author;
    }
    public function setAuthor($author){
        $this->author = $author;
    }

    public function getCreateDateTime(){
        return $this->createDateTime;
    }
    public function setCreateDateTime($createDateTime){
        $this->createDateTime = $createDateTime;
    }
}
?>