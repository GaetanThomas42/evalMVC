<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
    <?php include 'Vue/Parts/css.php'; ?>
</head>
<body>
    <h2>Add a Book</h2>
    <div class='row p-5 m-3'>
        <form class='form-group col-md-3' method='post' action='./index.php?controller=book&action=insert'>
            <label for="title">Titre</label><input class='form-control' name="title" type="text">
            <label for="author">Author</label><input class='form-control' name="author" type="text">
            <label for="categorie">Categorie</label>
            <select name="categorie">
                <option value="roman">Roman</option>
                <option value="compte">Compte</option>
                <option value="nouvelle">Nouvelle</option>
             </select>
            <button class="btn btn-success">Submit</button>
            <a class="btn btn-secondary" href="./index.php?controller=book&action=selectAll">Return</a>
        </form>
    </div>
</body>
