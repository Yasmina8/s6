<!DOCTYPE html>     
<html>
    <head>
        <meta charset="utf-8"/> <!--charset : algorithme décodage : pour comprendre caractères comme é--> 
        <link rel="stylesheet" href="./../css/bootstrap.css">
        <title>Home

        </title>
        

    </head>

<body>

    <?php
    include "config.php";
   $base=connect();
   $requette="SELECT* FROM categories";
   $categories = $base->query($requette);

   $requette="SELECT p.name , p.description, p.price , c.name as namec from products as p , categories as c
    where p.idCat=c.id";
   $products = $base->query($requette);

   ?>
   <DIV class="container">
    <div   class="row">
        <div class="col">
        <a href="./../php/addcategory.php"
        class="btn btn-info">add Category</a>
</div>
</div>
<div class="row">
<div class="col"> 
<table class="table">

<thead>
    <tr>
        <th>Name</th>
        <th>Action</th>


</tr>


</thead>
<tbody>
     <?php while($category=$categories->fetchObject()) {?>
        <tr>
            
                <td><?php echo $category->name;?></td>
                <td>
                <a href="./viewUpdateCategory.php?id=<?php echo $category->id;?>"  class= "btn btn-warning">Modifier</a>
                <a href="./deleteCategory.php?id=<?php echo $category->id;?>" class="btn btn-danger">Supprimer</a>
                </td>
        </tr>
        <?php }?>
        </tbody>
</table>
<DIV class="container">
    <div   class="row">
        <div class="col">
        <a href="./../html/addProducts.html"
        class="btn btn-info">add product</a>
</div>
</div>
<div class="row">
<div class="col"> 
<table class="table">

<thead>
    <tr>
        <th>Name</th>
        <th>description</th>
        <th>price</th>
        <th>Action</th>


</tr>


</thead>
<tbody>
     <?php while($products=$products->fetchObject()) {?>
        <tr>
            
                <td><?php echo $products->name;?></td>
                <td> <?php echo $product->description; ?></td>
                <td> <?php echo $product->price; ?></td>
                <td> <?php echo $product->idCat; ?></td>
                <td>

                <a href="./viewUpdateProducts.php?id=<?php echo $products->id;?>"  class= "btn btn-warning">Modifier</a>
                <a href="./deleteProduct.php?id=<?php echo $products->id;?>" class="btn btn-danger">Supprimer</a>
                </td>
        </tr>
        <?php }?>
        </tbody>
</table>
</div>
</div>
</div>
</body>
</html>