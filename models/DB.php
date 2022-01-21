<?php
namespace models; 
 
class DB{
    protected static function connect(){
        try{
            $dbh=new \PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
            $tz = (new \DateTime('now', new \DateTimeZone(TIMEZONE)))->format('P');
            $dbh->exec("SET time_zone='$tz';");
            return $dbh;
        }
        catch(PDOException $e){
            echo "Error".$e->getmessage()."<br/>";
            die();
        }
    }
}