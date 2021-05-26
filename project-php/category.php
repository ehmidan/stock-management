<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./projects.css">

    <title>Document</title>
</head>

<body>
    <div class="Cards row">
        <?php
        include "connect.php";
        $stmt = $pdo->prepare("SELECT DISTINCT Category,ImgCategory FROM catigorys LIMIT 3");
        $stmt->execute();
        while ($Category = $stmt->fetch()) {
 

        ?>
            <div class="card col-4 "  style="width:100%; height: 100%;">
                <div class="card-body">
                    <img src="<?= $Category["ImgCategory"] ?>" class="img-fluid" alt="" style="width:85%;  margin-left:30px;">
                    <h5 class="card-title"><?= $Category["Category"] ?></h5>
                    <a href="Show.php?produit=<?php echo $Category["Category"]; ?> " class="btn btn-primary"> Show</a>
                    <a href="add.php" class="btn btn-outline-success">Add</a>
                </div>
            </div>



        <?php } ?>
    </div>




    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>

</html>