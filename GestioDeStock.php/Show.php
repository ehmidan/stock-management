<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./projects.css">
    <link rel="stylesheet" href="./css/bootstrap.css">


    <title>Document</title>
</head>

<body>
<div class="container-fluid" >
    <div class="container-fliud Cards row">
        <?php
        include "connect.php";
        $get = $_GET['produit'];
        $reqCat = $pdo->prepare("SELECT * FROM catigorys WHERE Category='$get'");
        $reqCat->execute();

        while ($Category = $reqCat->fetch()) {

        ?>
            <div class="card col-3">

                <div class="card">
                    <img src="<?= $Category["ImgCategory"] ?>" class="img-fluid" style="width:100%; height: 350px;" alt="">
                    <h5 class="card-title"><?= $Category["name"] ?></h5>
                    <h6 class="card-title">Quantity : <?= $Category["quantity"] ?> Piece</h6>
                    <h6 class="card-title">Price : <?= $Category["Price"] ?> DH </h6>
                    <a href="edite.php?name=<?= $Category["name"] ?>" class="btn btn-success btn-block"> Edit</a>
                    <a onclick="return confirm('are you sure you want delete this product')" href="./delete.php?id=<?= $Category["id"] ?>&cat=<?= $Category["Category"] ?>" class="btn btn-outline-danger btn-block ">DELETE</a>
                </div>
            </div>



        <?php }

        ?>
    </div>
    </div>





    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>

</html>