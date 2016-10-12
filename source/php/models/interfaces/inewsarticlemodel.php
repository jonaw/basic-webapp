<?php
interface INewsArticleModel{
    public function save(INewsArticle $newsArticle);
    public function delete(INewsArticle $newsArticle);
}
?>