<?php 

    class ProductModel
    {
        public function getAll()
        {
            $products = [
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
            return $products;
        }
    }
?>