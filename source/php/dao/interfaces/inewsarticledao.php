<?php
interface INewsArticleDAO{
    public function create(INewsArticle $newsArticle);
    public function read(INewsArticle $newsArticle);
    public function update(INewsArticle $newsArticle);
    public function delete(INewsArticle $newsArticle);

    public function getAll($filter);
    public function getAllPaginated($filter, $page, $pageSize);
    public function getNumberOfPages($filter, $pageSize);
}
?>