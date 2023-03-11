<table border='1'>
    <thead>
        <th>ID</th>
        <th>Ten san pham</th>
        <th>Gia</th>
        <th>Hinh anh</th>
        <th>Action</th>
    </thead>
    <?php foreach($datas as $product)
    {
        ?>
        <tr>
            <td><?=$product['id'] ?></td>
            <td><a href="<?= URL ?>/product/detail/<?= $product['id'] ?>"><?=$product['name'] ?></a></td>
            <td><a href="<?= URL ?>/product/detail/<?= $product['id'] ?>"><?=$product['price'] ?></a></td>
            <td><a href="<?= URL ?>/product/detail/<?= $product['id'] ?>"><?=$product['imageURL'] ?></a></td>
            <td><a href="<?= URL ?>/product/delete/<?= $product['id'] ?>">X</a></td>
        </tr>
     <?php   
    } ?>
</table>