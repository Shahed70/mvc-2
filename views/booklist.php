<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row mx-auto">
            <div class="col-md-6">
                <table class="table border">
                    <tr>
                        <td>Title</td>
                        <td>Author</td>
                        <td>Description</td>
                    </tr>

                    <?php
                    foreach ($books as  $book) {
                    ?>
                        <tr>
                            <td>
                                <a href="index.php?book=<?php echo $book->bookName ?>">
                                    <?php echo $book->bookName ?>
                                </a>
                            </td>
                            <td><?php echo $book->bookAuthor ?></td>
                            <td><?php echo $book->bookDetails ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>