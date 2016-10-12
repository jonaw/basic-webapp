<?php
class NewsArticleModel implements INewsArticleModel{
    private $dao;
    
    public function __construct(INewsArticleDAO $dao){

    }

    public function save(INewsArticle $newsArticle){
        if($newsArticle->getId() == 0){
            $dao->create($newsArticle);
        }
        else{
            $dao->update($newsArticle);
        }

        return $dao->read($newsArticle);
    }

    public function delete(INewsArticle $newsArticle){
        if($newsArticle->getId() == 0)
        {
            throw new Exception();
        }
        else{
            $dao->delete($newsArticle);
        }
    }
}
?>