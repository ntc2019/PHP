<table border='1'>
    <thead>
        <th>ID</th>
        <th>Ten</th>
        <th>Tuoi</th>
    </thead>
    <?php foreach($datas as $product)
    {
        ?>
        <tr>
            <td><?=$product['id'] ?></td>
            <td><?=$product['name'] ?></td>
            <td><?=$product['age'] ?></td>
        </tr>
     <?php   
    } ?>
</table>