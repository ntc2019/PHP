<table border='1'>
    <thead>
        <th>ID</th>
        <th>Ten san pham</th>
    </thead>
    <?php foreach($datas as $product)
    {
        ?>
        <tr>
            <td><?=$product['id'] ?></td>
            <td><?=$product['name'] ?></td>
        </tr>
     <?php   
    } ?>
</table>