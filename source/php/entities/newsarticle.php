<?php
class NewsArticle implements INewsArticle{
    private $id;
    private $header;
    private $body;
    private $author;
    private $createDateTime;
    private $lastUpdateDateTime;
    private $isPublished;

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getHeader(){
        return $this->$header;
    }
    public function setHeader($header){
        $this->header = $header;
    }

    public function getBody(){
        return $this->$body;
    }
    public function setBody($body){
        $this->body = $body;
    }

    public function getAuthor(){
        return $this->$author;
    }
    public function setAuthor($author){
        $this->author = $author;
    }

    public function getCreateDateTime(){
        return $this->$createDateTime;
    }
    public function setCreateDateTime($createDateTime){
        $this->createDateTime = $createDateTime;
    }

    public function getLastUpdateDateTime(){
        return $this->lastUpdateTime;
    }
    public function setLastUpdateDateTime($lastUpdateTime){
        $this->lastUpdateTime = $lastUpdateTime;
    }

    public function getIsPublished(){
        return $this->isPublished;
    }
    public function setIsPublished(){
        $this->isPublished = $isPublished;
    }
}
?>