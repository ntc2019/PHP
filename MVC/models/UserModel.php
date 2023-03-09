<?php 
    class UserModel
    {
        public function getAll()
        {
            $users = [
                [
                    'id' => '1',
                    'name' => 'Nguyen Van A',
                    'age' => '52'
                ],
                [
                    'id' => '2',
                    'name' => 'Tran Van B',
                    'age' => '28'
                ],
                [
                    'id' => '3',
                    'name' => 'Ho Van C',
                    'age' => '17'
                ],
                [
                    'id' => '4',
                    'name' => 'Trinh Thi D',
                    'age' => '46'
                ],
                [
                    'id' => '5',
                    'name' => 'Doan Van E',
                    'age' => '72'
                ]
            ];
            return $users;
        }
    }
?>