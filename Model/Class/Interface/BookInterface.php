<?php

interface BookInterface{
    public function __construct($id = null, $title = null, $author = null, $categorie = null);
    public function getId();
    public function setId($id);
    public function getTitle();
    public function setTitle($title);
    public function getAuthor();
    public function setAuthor($author);
    public function getCategorie();
    public function setCategorie($categorie);
}

?>