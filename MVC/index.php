<?php 
    class Index
    {   
        public function homeLink()
        {
            ?>
            <a href="./index.php">Home</a><br/>
            <?php
        }

        public function showLinks()
        {
            ?>
            <a href="<?= URL ?>/?url=product/index">Danh sach san pham</a><br/>
            <a href="<?= URL ?>/?url=product/add">Them san pham</a><br/>
            <a href="<?= URL ?>/?url=product/update">Cap nhat san pham</a><br/>
            <a href="<?= URL ?>/?url=product/detail">Chi tiet san pham</a><br/>

            <a href="<?= URL ?>/?url=user/index">Danh sach nguoi dung</a><br/>
            <a href="<?= URL ?>/?url=user/add">Them nguoi dung</a><br/>
            <a href="<?= URL ?>/?url=user/update">Cap nhat nguoi dung</a><br/>
            <a href="<?= URL ?>/?url=user/detail">Chi tiet nguoi dung</a><br/>
            <?php
        }

        public function showContent()
        {
            require_once('./controllers/BaseController.php');
            $urlString = $_GET['url'] ?? 'product/index';
            $url = explode('/',$urlString);

            $controller = $url[0].'Controller';
            $controller = ucfirst($controller);
            $action = $url[1] ?? 'index';
            require_once("./controllers/$controller.php");
            $data = new $controller;
            $data->$action();
        }
    }
?>

<?php 
    require_once('./config/config.php');
    $index = new Index;
    $index->homeLink();
    if(count($_GET) > 0){
        $index->showContent();
    }else{
        $index->showLinks();
    }
?>