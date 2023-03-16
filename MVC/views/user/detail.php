<h1>Chi tiet nguoi dung</h1>
<form method="POST">
    <label for="name">Ten nguoi dung:</label><br/>
    <input type="text" name="name" id="name" value=<?="'".$datas['name']."'" ?>><br/>
    <label for="age">Tuoi:</label><br/>
    <input type="text" name="age" id="age" value=<?=$datas['age'] ?>><br/>
    <input type="submit" value="Edit" name="editUser">
</form>