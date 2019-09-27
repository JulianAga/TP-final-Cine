<?php 
namespace models;

class Post {

    private $id;
    private $title;
    private $autor;
    private $category;
    private $date;
    private $description;


    function __construct() {
        $this->id = date('Ymdhms');

    }

    public function setID($value) {
        $this->id = $value;
    }
    
    public function setTitle($value) {
        $this->title = $value;
    }
    public function setAuthor($value) {
        $this->autor = $value;
    }
    public function setCategory($value) {
        $this->category = $value;
    }
    public function setDate($value) {
        $this->date = $value;
    }
    public function setDescription($value) {
        $this->description = $value;
    }

    public function getID() {
        return $this->id;
    } 
     public function getTitle() {
        return $this->title;
    }  
    public function getAuthor() {
        return $this->autor;
    }  
    public function getCategory() {
        return $this->category;
    } 
     public function getDate() {
        return $this->date;
    }  
    public function getDescription() {
        return $this->description;
    }

}