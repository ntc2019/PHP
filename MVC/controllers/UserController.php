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

        public function delete($id)
        {
            $this->userModel->delete($id);
            header('Location: '. URL .'/user/index');
        }
        
        public function add()
        {
            $this->loadView('./views/user/add.php');
            if(isset($_POST['addUser']))
            {
                $user = [
                    'name' => $_POST['name'],
                    'age' => $_POST['age']
                ];
                $this->userModel->store($user);
                header('Location: '. URL .'/user/index');
            }
        }

        public function detail($id)
        {
            $user = $this->userModel->get($id);
            $this->loadView('./views/user/detail.php',$user);
            if(isset($_POST['editUser']))
            {
                $newUser = [
                    'name' => $_POST['name'],
                    'age' => $_POST['age']
                ];
                $this->userModel->update($newUser,$id);
                header('Location: '. URL .'/user/index');
            }
        }
    }
?>