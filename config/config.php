<?php

    class Database
    {
        private $db;
        function __construct()
        {
            try {
                $this->db = new PDO('mysql:host=localhost;dbname=db_ujon;','root','');
                $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            } catch (PDOException $th) {
                echo $th->getMessage();
                die();
            }

        }

        function insert($tbl, $data)
        {
            try {
                //code...
                $key = implode(',', array_keys($data));
                $val = implode(',', array_values($data));
                $q = "INSERT INTO $tbl (".$key.") VALUES('".$val."')";
                $res = $this->db->prepare($q);
                $res->execute();
                if(res){
                    return true;
                }else{
                    return false;
                }
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }

        function select($tbl)
        {
            
            try {
                //code...
                $q = "SELECT * FROM $tbl";
                $res = $this->db->prepare($q);
                $res->execute();
                $cek = $res->rowCount();
                if($res != ''){
                    foreach($res as $data){
                        $hasil[] = $data;
                    }
                    return $hasil;
                }
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }

        function select_where($tbl, $cond)
        {
            try {
                //code...
                $condition = '';  
                $array = array();  
                foreach($cond as $key => $value)  
                {  
                     $condition .= $key . " = '".$value."' AND ";  
                }  
                $condition = substr($condition, 0, -5);
                $q = "SELECT * FROM ".$tbl." WHERE ". $condition;
                $res = $this->db->prepare($q);
                $res->execute();
                $cek = $res->rowCount();
    
                if($cek > 0){
                    foreach($res as $row){
                        $array[] = $row;
                    }
                    return $array;
                }else{
                    return false;
                }
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }

        function update($tbl, $fld, $cond)
        {
            try {
                //code...
                $query = '';  
                $condition = '';  
                foreach($fields as $key => $value)  
                {  
                        $query .= $key . "='".$value."', ";  
                }  
                $query = substr($query, 0, -2);  
                /*This code will convert array to string like this-  
                input - array(  
                        'key1'     =>     'value1',  
                        'key2'     =>     'value2'  
                )  
                output = key1 = 'value1', key2 = 'value2'*/  
                foreach($cond as $key => $value)  
                {  
                        $condition .= $key . "='".$value."' AND ";  
                }  
                $condition = substr($condition, 0, -5);  
                /*This code will convert array to string like this-  
                input - array(  
                        'id'     =>     '5'  
                )  
                output = id = '5'*/
                $q = "UPDATE ".$tbl." SET ".$query." WHERE ". $condition;
                $res = $this->db->prepare($q);
                $res->execute();
                if($res){
                    return true;
                }else{
                    return false;
                }
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }


    } //class ends here
    

?>