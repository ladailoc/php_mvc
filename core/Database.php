<?php
class Database{
    private ?PDO $__conn;
    public function __construct(){
        global $config;
        $this->__conn = Connection::getInstance($config['database'])->getConnection();
    }

    public function insert($table, $data){
        $keys = implode(',', array_keys($data));
        $values = implode(',', array_values($data));
        $sql = "INSERT INTO $table($keys) VALUES ($values)";
        $this->query($sql);
    }

    public function update($table, $data=[], $where=[]){
        $set = '';
        foreach ($data as $key => $value){
            $set .= "$key = '$value',";
        }
        $set = rtrim($set, ','); // Xóa dấu , ở cuối
        $condition = implode(' AND ', array_map(fn($key, $val) => "$key = $val", array_keys($where), array_values($where))); //    
        $sql = "UPDATE $table SET $set WHERE $condition";
        $this->query($sql, $where);
    }

    public function delete($table, $where=[]){
        $condition = implode(' AND ', array_map(fn($key, $val) => "$key = $val", array_keys($where), array_values($where)));
        $sql = "DELETE FROM $table WHERE $condition";
        $this->query($sql, $where);
    }

    public function query($sql, $params = []){
        $stmt = $this->__conn->prepare($sql);
        if ($params)
            $stmt->execute($params);
        else 
            $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


?>