<?php 
    class App
    {   
        private $controller = 'product';
        private $action = 'index';
        private $params = [];

        public function __construct()
        {
            if(isset($_GET['url']))
            {
                $url = explode('/',$_GET['url']);
                $this->controller = ($url[0] ?? 'product').'Controller';
                $this->controller = ucfirst($this->controller);
                $this->action = ($url[1] ?? 'index');
                if(isset($url[2]))
                {
                    $this->params[] = $url[2];
                }
            }
        }

        public function homeLink()
        {
            ?>
            <a href="http://localhost/Cuong/PHP/MVC/index.php">Home</a><br/>
            <?php
        }

        public function showLinks()
        {
            ?>
            <a href="<?= URL ?>/product/index">Danh sach san pham</a><br/>
            <a href="<?= URL ?>/product/add">Them san pham</a><br/>

            <a href="<?= URL ?>/user/index">Danh sach nguoi dung</a><br/>
            <a href="<?= URL ?>/user/add">Them nguoi dung</a><br/>
            <?php
        }

        public function showContent()
        {
            require_once('./controllers/BaseController.php');
            require_once('./controllers/'.$this->controller.'.php');
            $this->controller = new $this->controller;
            call_user_func_array([$this->controller,$this->action],$this->params);
        }

        public function show()
        {
            $this->homeLink();
            if(count($_GET) > 0){
                $this->showContent();
            }else{
                $this->showLinks();
            }
        }
    }
?>