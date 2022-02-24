<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Finder</title>
</head>

<body>
    <h2>Encontre livros pelos seguintes parâmetros:</h2>

    <form action="#" method="post">
        <input type="text" name="titulo" id="" placeholder="Título">
        <input type="text" name="autor" placeholder="Autor">
        <button type="submit">Enviar</button>

    </form>

    <?php

    $key = 'AIzaSyCaEOcb94pv7skxmccDoMwEflxRL3ne52U';

    $titulo = str_replace(" ", "+" , $_POST['titulo']);
    $autor = $_POST['autor'];

    $url = "https://www.googleapis.com/books/v1/volumes?q=intitle:{$titulo}+inauthor:{$autor}&key=AIzaSyCaEOcb94pv7skxmccDoMwEflxRL3ne52U";

    $books = json_decode(file_get_contents($url));


    foreach ($books->items as $book):
    ?>

    <h1><?php echo $book->volumeInfo->title; ?></h1>

    <?php
    endforeach;

    ?>

</body>

</html>