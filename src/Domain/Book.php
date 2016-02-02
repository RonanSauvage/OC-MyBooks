<?php

namespace MicroCMS\Domain;

class Book 
{
    /**
     * Book id.
     *
     * @var integer
     */
    private $id;

    /**
     * Book title.
     *
     * @var string
     */
    private $title;

    /**
     * Book content.
     *
     * @var string
     */
    private $content;
    
    /**
     * Book isbn.
     *
     * @var string
     */
    private $isbn;
    
     /**
     * Book summary.
     *
     * @var string
     */
    private $summary;
    
    /**
     * Associated author.
     *
     * @var \OC-MyBooks\Domain\Author
     */
    private $author;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }
    
    public function getIsbn() {
        return $this->isbn;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }
    
    public function geSummary() {
        return $this->summary;
    }

    public function setSummary($summary) {
        $this->summary = $summary;
    }
    
    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor(Author $author) {
        $this->author = $author;
    }
}