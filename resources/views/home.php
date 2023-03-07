<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <style>
        .container{
            background: #eee8e8;
            border-radius: 20px;
        }
        html,body{
            background: #717676!important;
        }
        .card-body{
            text-align: center;
        }
        .card{
            width: 18rem;
            margin:20px;
            min-height: 27rem;
            position: relative;

        }
        .details{
            position: absolute;
            bottom: 15px;
            left: 10%;
        }
        .col{
            background: #a29c9c;
        }
        .add{
            position: absolute;
            bottom: 15px;
            left: 46%;
        }

    </style>
<!--    <link type="text/css" rel="stylesheet" href="home.css">-->
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php include('header.php') ?>
<div class="container col">
    <div class="row">
        <?php
        for($i=0;$i<count($books);$i++){
            ?>
        <div class="col-lg-3">
            <div class="card">
                <img src="<?php echo $books[$i]['picture']; ?> class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $books[$i]['name']; ?></h5><br>
                    <h6 class="card-text"><b>Жанр: </b><?php echo $books[$i]['genre']; ?></h6>
                    <h6 class="card-text"><b>Автор: </b> <?php echo $books[$i]['author']; ?></h6>
                    <?php $book = $books[$i]['id']; ?>
                    <a href="/api/books/<?php echo $book; ?>" class="btn details btn-primary">Details</a>
                        <form method="post" action="/api/addFavorites/<?php echo $books[$i]['id']; ?>" class="form-horizontal">
                            <button type="submit" class="btn add btn-success">Add to favorite</button>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</div>
</body>
</html>
