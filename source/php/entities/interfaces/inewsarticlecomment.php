<?php
interface INewsArticleComment{
    public function getId();
    public function setId();

    public function getBody();
    public function setBody();

    public function getAuthor();
    public function setAuthor();

    public function getCreateDateTime();
    public function setCreateDateTime();
}
?>