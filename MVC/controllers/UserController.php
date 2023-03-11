<?php 
    class UserController extends BaseController
    {
        private $userModel;

        public function __construct()
        {
            require_once('./models/UserModel.php');
            $this->userModel = new UserModel();
        }

        public function index()
        {
            $users = $this->userModel->getAll();
            $this->loadView('./views/user/index.php',$users);
        }

        public function update()
        {
            echo 'Update';
        }

        public function add()
        {
            echo 'Add';
        }

        public function detail($id)
        {
            $user = $this->userModel->get($id);
            $this->loadView('./views/user/detail.php',$user);
        }
    }
?>