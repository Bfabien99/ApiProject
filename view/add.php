<?php require 'header.php';
if(isset($_POST['submit']))
{
    if(!empty($_POST['name']) && !empty($_POST['tel']) && !empty($_POST['location']) && !empty($_POST['area']) && !empty($_POST['details']) && !empty($_POST['price'])){
        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $location = $_POST['location'];
        $area = $_POST['area'];
        $details = $_POST['details'];
        $price = $_POST['price'];
        header("location:/save/$name-$tel-$location-$area-$details-$price");
    }
    else
    {
        echo "Error";
    }
}
?>
    <h1>Ajouter un nouveau</h1>
    <form action="" method="POST">
        <input type="text" name ="name" placeholder="name"><br> 
        <input type="tel" name ="tel" placeholder="tel" ><br> 
        <input type="text" name ="location" placeholder="location" ><br> 
        <input type="number" name ="price" placeholder="price" ><br> 
        <input type="number" name ="area" placeholder="area" ><br> 
        <input type="text" name ="details" placeholder="details" ><br>
        <input type="submit" name ="submit" value="Sauvegarder" name="submit" id="save">
        <a href="/site/index.html" class="back">retour</a>
    </form>
<?php require 'footer.php' ?>