<?php 
    class BaseModel extends Database
    {   
        public $tableName;
        public $columnNames;
        public function query($sql)
        {
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
            return $this->queryGet($sql);
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

        public function add($values)
        {   
            $columnsNameList = implode($this->columnNames);
            $valuesList = implode($values);
            $sql = "INSERT INTO $this->tableName ($columnsNameList) VALUES ($valuesList)";
        }
    }

?>