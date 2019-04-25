<?php
class BookManager extends DbManager {

    public function __construct(){
        parent::__construct();
    }
//    Select all Books in DB
    public function selectAll(){
        $query ='SELECT * FROM `book`';
        $res = $this->bdd->query($query);
        $books = [];
        foreach  ($res as $data) {
            $books[] = new Book($data['id'], $data['title'], $data['author'], $data['categorie']);
        }
        return $books;
    }
    //    Select a Book n DB
    public function select($id){
        $query = $this->bdd->prepare('SELECT * FROM `book` WHERE id=?');
        $query->bindParam(1, $id);
        $query -> execute();
        $data = $query -> fetch();
        $book = new Book($data['id'], $data['title'],$data['author'], $data['categorie']);
        return $book;
    }
    //    Insert a Book n DB
    public function insert(Book $book){
        $query = "INSERT INTO `book`(`title`, `author`, `categorie`) VALUES  ('". $book->getTitle() ."', '". $book->getAuthor() ."','". $book->getCategorie() ."')";
        $this->bdd->query($query);
    }
    //    Delete a Book n DB
    public function delete($id){
        $query = "DELETE FROM `book` WHERE id =" .$id;
        $this->bdd->query($query);
    }
    //    Update a Book n DB
    public function update(Book $book){
        $query = "UPDATE `book` SET `title`='". $book->getTitle() ."', `author`='". $book->getAuthor() ."', `categorie`='". $book->getCategorie() ."' WHERE id =". $book->getId();
        $this->bdd->query($query);
    }
}