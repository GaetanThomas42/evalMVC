<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
    <?php include 'Vue/Parts/css.php'; ?>
</head>
<body>
    <h2>Update an Book</h2>
    <div class='row p-5 m-3'>
        <form class='form-group col-md-3 col-sm-6' method='post' action='./index.php?controller=book&action=update&target=<?php echo $book->getId(); ?>'>
            <label>Titre</label><input class='form-control' type='text' name='title' value='<?php echo $book->getTitle(); ?>'>
            <label>Contenu</label><input class='form-control' type='text' name='author' value='<?php echo $book->getAuthor(); ?>'>
            <label for="categorie">Categorie</label>
            <select name="categorie">
                <option value="roman">Roman</option>
                <option value="compte">Compte</option>
                <option value="nouvelle">Nouvelle</option>
            </select>
            <button class='btn btn-success'>Update</button>
            <a class='btn btn-secondary' href='./index.php?controller=book&action=selectAll'>Return</a>
        </form>

    </div>
</body>