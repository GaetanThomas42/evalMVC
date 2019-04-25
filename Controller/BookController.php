<?php
class BookController{
    // Select all the books to display them
    public function renderBooks(){
        $bookManager = new BookManager();
        $books = $bookManager->selectAll();
        require 'Vue/adminVue.php';
    }
    // Display InsertForm
    public function renderInsert(){
        require 'Vue/insertForm.php';
    }
    // Insert Book in DB and redirect
    public function insert(){
        $book = new Book(null, $_POST['title'], $_POST['author'], $_POST['categorie']);
        $bookManager = new BookManager();
        $bookManager->insert($book);
        header('Location: http://localhost/evalMVC/index.php?controller=book&action=selectAll');
    }
    // Display UpdateForm with data of selected book
    public function renderUpdate($id){
        $bookManager = new BookManager();
        $book = $bookManager->select($id);
        require 'Vue/updateForm.php';
    }
    // Update Book in DB and redirect
    public function update($id){
        $book = new Book($id, $_POST['title'], $_POST['author'], $_POST['categorie']);
        $bookManager = new BookManager();
        $bookManager->update($book);
        header('Location: http://localhost/evalMVC/index.php?controller=book&action=selectAll');
    }
    // Display DeleteForm
    public function renderDelete($id){
        require 'Vue/deleteForm.php';
    }
    // Delete Book in DB and redirect
    public function delete(){
        $bookManager = new BookManager();
        $bookManager->delete($_GET['target']);
        header('Location: http://localhost/evalMVC/index.php?controller=book&action=selectAll');
    }
}
?>