<?php

class Book extends BookManager implements  BookInterface {

    private $id;
    private $title;
    private $author;
    private $categorie;

    public function __construct($id = null, $title = null, $author = null, $categorie = null){
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->categorie = $categorie;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function setAuthor($author){
        $this->contenu = $author;
    }
    public function getCategorie(){
        return $this->categorie;
    }
    public function setCategorie($categorie){
        $this->categorie = $categorie;
    }
}
