<?php 

    class ProductModel extends BaseModel
    {   
        public $tableName = 'products';

        public function getAll($select = ['*'])
        {
            return parent::getAll();
        }
    }
?>