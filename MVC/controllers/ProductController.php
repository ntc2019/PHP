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
            $this->loadView('./views/product/add.php');
        }

        public function delete()
        {
            $this->productModel->delete($id);
        }

        public function detail($id)
        {
            $product = $this->productModel->get($id);
            $this->loadView('./views/product/detail.php',$product);
        }
    }
?>