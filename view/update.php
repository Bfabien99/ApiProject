<?php 
if(isset($_POST['submit']))
{
    if(!empty($_POST['name']) && !empty($_POST['tel']) && !empty($_POST['location']) && !empty($_POST['area']) && !empty($_POST['details']) && !empty($_POST['price'])){
        $submit = $_POST['submit'];
        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $location = $_POST['location'];
        $area = $_POST['area'];
        $details = $_POST['details'];
        $price = $_POST['price'];
        header("location:/updates/{$callModel['id']}-$name-$tel-$location-$area-$details-$price");
    }
    else
    {
        echo "Error";
    }
}
require 'header.php' 
?>
    <h1>Update</h1>
    <form action="" method="POST">
        <input type="text" name ="name" placeholder="name" value="<?= $callModel['owner'] ?>"><br> 
        <input type="tel" name ="tel" placeholder="tel" value="<?= $callModel['tel'] ?>"><br> 
        <input type="text" name ="location" placeholder="location" value="<?= $callModel['location'] ?>"><br> 
        <input type="number" name ="price" placeholder="price" value="<?= $callModel['price'] ?>"><br> 
        <input type="number" name ="area" placeholder="area" value="<?= $callModel['area'] ?>"><br> 
        <input type="text" name ="details" placeholder="details" value="<?= $callModel['details'] ?>"><br>
        <input type="submit" name ="submit" value="Sauvegarder" id="save">
        <a href="/site/index.html" class="back">retour</a>
    </form>
<?php require 'footer.php' ?>