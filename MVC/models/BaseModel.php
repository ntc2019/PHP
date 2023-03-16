<?php 
    class BaseModel extends Database
    {   
        public $tableName;
        public $columnNames;
        public function query($sql)
        {   
            $this->connect();
            return mysqli_query($this->connect,$sql);
        }
        public function queryGet($sql)
        {   
            $this->connect();
            $datas = [];
            $result = mysqli_query($this->connect,$sql);
            if(mysqli_num_rows($result) > 0)
            {
                if(mysqli_num_rows($result) > 1)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $datas[] = $row;
                    }
                }else
                {
                    $datas = mysqli_fetch_assoc($result);
                }
            }
            return $datas;
        }

        public function getAll($select = ['*'])
        {   
            $selectList = implode(',',$select);
            $sql = "SELECT $selectList FROM $this->tableName";
            $result = $this->queryGet($sql);
            $result = array_reverse($result);
            return $result;
        }

        public function get($id)
        {   
            $sql = "SELECT * FROM $this->tableName WHERE id = $id";
            return $this->queryGet($sql);
        }

        public function delete($id)
        {
            $sql = "DELETE FROM $this->tableName WHERE id = $id";
            $this->query($sql);
        }
        
        public function store($products)
        {   $values = array_map(function ($x) {
                return "'".$x."'";
                }, array_values($products));
            $columns = implode(',',array_keys($products));
            $values = implode(',',$values);
            $sql = "INSERT INTO $this->tableName ($columns) VALUES ($values)";
            $this->query($sql);
        }

        public function update($product,$id)
        {
            $info = array_map(function ($key,$value) {
                return sprintf("%s = '%s'",$key,$value);
                }, array_keys($product),$product);
            $info = implode(',',$info);
            $sql = "UPDATE $this->tableName SET $info WHERE id = '$id'";
            $this->query($sql);
        }
    }

?>