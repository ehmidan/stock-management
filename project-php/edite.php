
 <?php
 include "connect.php";

        $get = $_GET['name'];
        $reqCat = $pdo->prepare("SELECT * FROM catigorys WHERE name='$get'");
        $reqCat->execute();
       while( $Category = $reqCat->fetch()){
        $categoryname=$Category["Category"];
      
 ?>

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
<div class="row justify-content-center align-items-center">
        
        <form action="" method="post" class="col-7 row mt-5 form">
        <h2 class="col-12 text-center">Edite Product</h2>
        <div class="form-group col-12">
                <label for="exampleInputEmail1">Name Product </label>
                <input type="text" class="form-control" value="<?=$Category["name"]  ?>" name="name" placeholder="Enter the product">
            </div>
            <div class="form-group col-12">
                <label for="exampleInputPassword1">Quantity</label>
                <input type="text" class="form-control" value="<?=$Category["quantity"]  ?>" name="quantity" placeholder="Enter the quantity">
            </div>
            <div class="form-group col-12">
                <label for="exampleInputPassword1">price</label>
                <input type="text" class="form-control"  value="<?=$Category["Price"]  ?>" name="price" placeholder="Enter the price">
            </div>
           
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-3 ">Add</button>
            </div>
            </div>
           
           
        </form>
   <?php } 
   if (isset($_POST['submit'])) {
    $NAME = $_POST["name"];
    $PRICE = $_POST["price"];
    $QUANTITY = $_POST["quantity"];
    $get = $_GET['name'];

    $stmt = "UPDATE catigorys SET name=:name , Price=:price , quantity=:quantity WHERE name=:name";
    $pdor = $pdo->prepare($stmt);
    $pdoe = $pdor->execute(array( ":name"=>$NAME,":price"=>$PRICE , ":quantity"=>$QUANTITY));
    if($pdoe){
        header("location:Show.php?produit=$categoryname");
        echo '<script> alert ("Data Updated")</script>'; 
    }else{
        {echo '<script> alert ("Data Not Updated")</script>';} 
    }

}
   ?>
    </div> 
    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/bootstrap.js"></script> 
</body>
</html>