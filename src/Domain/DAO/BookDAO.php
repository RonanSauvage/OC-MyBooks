<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Comment;

class BookDAO extends DAO 
{
    /**
     * @var \OC-MyBooks\DAO\AuthorDAO
     */
    private $authorDAO;

    public function setAuthorDAO(Author $authorDAO) {
        $this->authorDAO = $authorDAO;
    }

    /**
     * Return a list of all books for an author, sorted by title .
     *
     * @param integer $authorId The article id.
     *
     * @return array A list of all books for the anthor.
     */
    public function findAllByAuthor($authorId) {
        $book = $this->authorDAO->find($authorId);

        $sql = "select book_id, book_title, book_isbn, book_summary from book where auth_id=? order by book_title";
        $result = $this->getDb()->fetchAll($sql, array($authorId));

        $books = array();
        foreach ($result as $row) {
            $bookId = $row['book_id'];
            $book = $this->buildDomainObject($row);
            $book->setAuthor($authorId);
            $books[$bookId] = $book;
        }
        return $books;
    }

    /**
     * Creates an Book object based on a DB row.
     *
     * @param array $row The DB row containing Book data.
     * @return \MicroCMS\Domain\Book
     */
    protected function buildDomainObject($row) {
        $book = new Book();
        $book->setId($row['book_id']);
        $book->setTitle($row['com_title']);
        $book->setIsbn($row['com_isbn']);
        $book->setSummary($row['com_summary']);
        $book->setAuthor($row['auth_id']);

        if (array_key_exists('art_id', $row)) {
            // Find and set the associated article
            $articleId = $row['art_id'];
            $article = $this->articleDAO->find($articleId);
            $comment->setArticle($article);
        }
        
        return $comment;
    }
}