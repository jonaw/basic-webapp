<?php
interface INewsArticle{
    public function getId();
    public function setId();

    public function getHeader();
    public function setHeader();

    public function getBody();
    public function setBody();

    public function getAuthor();
    public function setAuthor();

    public function getCreateDateTime();
    public function setCreateDateTime();

    public function getLastUpdateDateTime();
    public function setLastUpdateDateTime();

    public function getIsPublished();
    public function setIsPublished();
}

?>