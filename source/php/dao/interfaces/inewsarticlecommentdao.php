<?php
interface INewsArticleCommentDAO{
    public function create(INewsArticleComment $newsArticleComment);
    public function read(INewsArticleComment $newsArticleComment);
    public function update(INewsArticleComment $newsArticleComment);
    public function delete(INewsArticleComment $newsArticleComment);

    public function getAll($filter);
    public function getAllPaginated($filter, $page, $pageSize);
    public function getNumberOfPages($filter, $pageSize);
}
?>