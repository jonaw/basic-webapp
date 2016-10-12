<?php
class NewsArticleDAO implements INewsArticleDAO {
    private $connection;
    
    public function __construct($connection){
        $this->connection = $connection;
    }

    public function create(INewsArticle $newsArticle){
        $statement = "INSERT INTO NEWSARTICLE(header, body, author, createDateTime, lastUpdateTime, is_published) VALUES(?,?,?,?,?,?)";
        $preparedStatement = $connection->prepare($statement);

        $preparedStatement->bind_param("ssissb",
            $header,
            $body,
            $author,
            $createDateTime,
            $createDateTime,
            $isPublished
        );

        $header = $INewsArticle.getHeader();
        $body = $INewsArticle.getBody();
        $author = $INewsArticle.getAuthor();
        $createDateTime = $INewsArticle.getCreateDateTime();
        $isPublished = $INewsArticle.getIsPublished();

        $preparedStatement->execute();
    }

    public function read(INewsArticle $newsArticle){

    }
    
    public function update(INewsArticle $newsArticle){

    }
    
    public function delete(INewsArticle $newsArticle){

    }

    public function getAll($filter){

    }
    
    public function getAllPaginated($filter, $page, $pageSize){

    }
    
    public function getNumberOfPages($filter, $pageSize){

    }
}
?>