<?php 
namespace models;  
use models\DB;

class Products extends DB{
    public static function All(){
        $stmt=parent::connect()->prepare('SELECT * FROM products');
        if(!$stmt->execute()){
            $stmt=null;
            header('location:'.HOST_URL.'index.php?error=stmtfailed');
            exit();
        }
        if ($stmt->rowCount()>0) {
            $datas=$stmt->fetchall(\PDO::FETCH_ASSOC);
        }else{
            $datas=0;
        }
        return $datas;
    }
}