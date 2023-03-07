<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add new book</title>
    <style>
        .container{
            background: #eee8e8;
            border-radius: 100px;
            margin-top: 0px;
            text-align: center;
        }
        html,body{
            background: #717676!important;
        }
        body{
            border-radius: 100px;
            margin-left: 200px;
            display: inline;
        }
        .reg{
            margin-top: 20px;
            font-family: emoji;
            font-size: xxx-large;
            color: #221d78;
        }
        form{
            width: 412px;
            margin-top: 25px;
            margin-bottom: 35px;
            background-color: #4eb4c7;;
            padding: 30px;
            display: inline-block;
            border-radius: 40px;

        }
        .input-group{
            border-radius: 40px;
        }
        .add-btn{
            margin-bottom: 0px;
            margin-left: 0px;
            margin-top: 20px;
            width: 300px;
            height: 50px;
            border: 2px solid #545466;
            border-radius: 40px;
        }
        .col{
            margin: auto;
        }
    </style>
    <!--    <link rel="stylesheet" href="register.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php include('header.php') ?>
<div class="container text-center">
    <div class="row">

        <div class="col-lg-8 col">
            <h1 class="text-center reg">New book</h1>
            <form method="post" action="/api/books" class="form-horizontal">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Name" aria-label="name" aria-describedby="basic-addon1">

                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="author" placeholder="Author" aria-label="surname" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="picture" placeholder="Link on picture" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="genre" placeholder="Genre" aria-label="Email" aria-describedby="basic-addon2">

                </div>
                <div class="input-group mb-3">
                    <textarea type="text" class="form-control" name="anotation" placeholder="Anotation" aria-describedby="basic-addon2"></textarea>
                </div>
                <button type="submit"  class="add-btn btn btn-success">Add book</button>
            </form>
        </div>

    </div>
</div>

</div>

</body>
</html>
