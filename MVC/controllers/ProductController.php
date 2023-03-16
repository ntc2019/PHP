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
            if(isset($_POST['addProduct']))
            {
                $products = [
                    'name' => $_POST['name'],
                    'price' => $_POST['price'],
                    'imageURL' => $_POST['imageURL']
                ];
                $this->productModel->store($products);
                header('Location: '. URL .'/product/index');
            }
        }

        public function delete($id)
        {
            $this->productModel->delete($id);
            header('Location: '. URL .'/product/index');
        }

        public function detail($id)
        {
            $product = $this->productModel->get($id);
            $this->loadView('./views/product/detail.php',$product);
            if(isset($_POST['editProduct']))
            {
                $newProduct = [
                    'name' => $_POST['name'],
                    'price' => $_POST['price'],
                    'imageURL' => $_POST['imageURL']
                ];
                $this->productModel->update($newProduct,$id);
                header('Location: '. URL .'/product/index');
            }
        }
    }
?>