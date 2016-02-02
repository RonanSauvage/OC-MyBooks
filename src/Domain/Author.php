<?php

namespace MicroCMS\Domain;

class Author 
{
    /**
     * Comment id.
     *
     * @var integer
     */
    private $id;

    /**
     * Comment first_name.
     *
     * @var string
     */
    private $first_name;

    /**
     * Comment last_name.
     *
     * @var string
     */
    private $last_name;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    public function getLast_name() {
        return $this->last_name;
    }

    public function setLast_name($last_name) {
        $this->last_name = $last_name;
    }
}