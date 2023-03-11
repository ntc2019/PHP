<table border='1'>
    <thead>
        <th>ID</th>
        <th>Ten nguoi dung</th>
        <th>Tuoi</th>
    </thead>
    <?php foreach($datas as $user)
    {
        ?>
        <tr>
            <td><?=$user['id'] ?></td>
            <td><a href="<?= URL ?>/user/detail/<?= $user['id'] ?>"><?=$user['name'] ?></a></td>
            <td><a href="<?= URL ?>/user/detail/<?= $user['id'] ?>"><?=$user['age'] ?></a></td>
        </tr>
     <?php   
    } ?>
</table>