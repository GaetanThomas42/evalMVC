<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>My library</title>
    <link href="style.css" rel="stylesheet" />
    <?php include 'Vue/Parts/css.php'; ?>
</head>

<body>
<h1>Admin Library</h1>
<div class="container">
        <a class='btn bg-success my-3  text-light' href='./index.php?controller=book&action=insertForm' >
            <strong>ADD</strong> <i class="fas fa-2x fa-plus-circle mt-2"></i>
        </a>
        <!--Cars table-->
        <table class='table text-center'>
            <thead class='thead-dark'>
            <tr>
                <th scope='col'>Id</th>
                <th scope='col'>Title</th>
                <th scope='col'>Author</th>
                <th scope='col'>Categorie</th>
                <th scope='col'>Actions</th>
            </tr>
            </thead>
            <tbody id='tableBook'>
            <?php
            foreach($books as $book){
                echo "<tr>
                            <th class='align-middle'><h5>" . $book->getId() . "</h5></th>
                            <td class='align-middle'><h5>" . $book->getTitle() . "</h5></td>
                            <td class='align-middle'><h5>" . $book->getAuthor() . "</h5></td>
                            <td class='align-middle'><h6>" . $book->getCategorie() . "</h6></td>
                            <td class='align-middle'>
                                <a class='btn btn-info m-2 p-3' href='./index.php?controller=book&action=updateForm&target=". $book->getId() ."'>UPDATE</a>
                                <a class='btn btn-danger m-2 p-3' href='./index.php?controller=book&action=deleteForm&target=". $book->getId() ."'><i class='fas fa-1x fa-dumpster'></i></a>
                            </td>
                        </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>