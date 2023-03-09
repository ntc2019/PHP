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
            <td><a href="<?= URL ?>/product/detail/<?= $product['id']-1 ?>"><?=$product['name'] ?></a></td>
        </tr>
     <?php   
    } ?>
</table>