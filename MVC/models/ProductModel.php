<?php 

    class ProductModel
    {
        private $products;

        public function __construct()
        {
            $this->products = [
                [
                    'id' => '1',
                    'name' => 'Xe hoi'
                ],
                [
                    'id' => '2',
                    'name' => 'Xe may'
                ],
                [
                    'id' => '3',
                    'name' => 'Xe dap'
                ]
            ];
            
        }
        public function getAll()
        {
            return $this->products;
        }

        public function get($id)
        {
            return $this->products[$id];
        }
    }
?>