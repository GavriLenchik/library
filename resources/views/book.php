<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $book['name']; ?></title>
    <style>
        .container{
            background: #eee8e8;
            border-radius: 20px;
            text-align: center;

        }
        html,body{
            background: #717676!important;
        }
        .col{
            border-radius: 40px;
            background: #eee8e8;
            padding: 20px;
            margin: auto;
        }
        .imageBook{
            border-radius: 40px;
            width: 500px!important;
            height: auto;
            padding-bottom: 40px;

        }
        .description{
            font-family: math;
            font-size: large;
        }
        .addDate{
            font-family: math;
            font-size: smaller;
            float: right;
        }
        .nav-link:hover{
            background: #a29c9c;
            border-radius: 10px;
        }
        .arr{
            background: #a29c9c;
        }
    </style>
<!--    <link rel="stylesheet" href="library/resources/views/books.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php include('header.php') ?>
<div class="container arr">
    <div class="row">

        <div class="col-lg-8 col">
            <img src="<?php echo $book['picture']; ?>" class="imageBook card-img-top" alt="..."><br>
            <h2><b><?php echo $book['name']; ?></b></h2>
            <h4><b>Автор: </b><?php echo $book['author']; ?></h4>
            <h4><b>Жанр: </b><?php echo $book['genre']; ?></h4><br><br>
            <h5><b>Анотація: </b></h5>
            <p class="description"><?php echo $book['anotation']; ?></p><br>
            <button type="button" onclick="window.location.href = '/register'" class="btn btn-success">Add to favorites</button><br><br>
            <p class="addDate">The date the book was added: <?php echo $book['created_at']; ?></p>


    </div>
</div>
</body>
</html>
