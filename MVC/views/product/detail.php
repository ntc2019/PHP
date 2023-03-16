<h1>Chi tiet san pham</h1>
<form method="POST">
    <label for="name">Ten san pham:</label><br/>
    <input type="text" name="name" id="name" value=<?="'".$datas['name']."'" ?>><br/>
    <label for="price">Gia:</label><br/>
    <input type="text" name="price" id="price" value=<?=$datas['price'] ?>><br/>
    <label for="ImageURL">Link hinh anh:</label><br/>
    <input type="text" name="imageURL" id="imageURL" value=<?="'".$datas['imageURL']."'" ?>><br/><br/>
    <input type="submit" value="Edit" name="editProduct">
</form>