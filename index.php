<?php
include 'include.php';

if($_GET['controller'] === 'book' && isset($_GET['action'])) {
 
    $bookController = new BookController();

    if ($_GET['action'] == 'selectAll') {
        $bookController->renderBooks();
    } elseif ($_GET['action'] == 'insertForm') {
        $bookController->renderInsert();
    } elseif ($_GET['action'] == 'insert') {
        $bookController->insert();
    } elseif ($_GET['action'] == 'deleteForm' && isset($_GET['target'])) {
        $bookController->renderDelete($_GET['target']);
    } elseif ($_GET['action'] == 'delete') {
        $bookController->delete();
    } elseif ($_GET['action'] == 'updateForm' && isset($_GET['target'])) {
        $bookController->renderUpdate($_GET['target']);
    } elseif ($_GET['action'] == 'update' && isset($_GET['action'])) {
        $bookController->update($_GET['target']);
    } else {
        echo "<h1 class='jumbotron'>Page not Found <div class=''></div></h1>";
    }
}
?>