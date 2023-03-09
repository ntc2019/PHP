<?php 

    class ProductController extends BaseController
    {
        private $productModel;

        public function __construct()
        {
            require_once('./models/ProductModel.php');
            $this->productModel = new ProductModel();
        }

        public function index()
        {
            $products = $this->productModel->getAll();
            $this->loadView('./views/product/index.php',$products);
        }

        public function update()
        {
            echo 'Update';
        }

        public function add()
        {
            echo 'Add';
        }

        public function detail()
        {
            echo 'detail';
        }
    }


?>