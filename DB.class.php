<?php
    class DB{
        private $dbHost     = "localhost";
        private $dbUsername = "root";
        private $dbPassword = "";
        private $dbName     = "kripto";
        
        
        public function __construct(){
            if(!isset($this->db)){
                // Connect to the database
                $pdo = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
                if($pdo->connect_error){
                    die("Failed to connect with MySQL: " . $pdo->connect_error);
                }else{
                    $this->db = $pdo;
                }
            }
        }
        
        /*
        * Returns rows from the database based on the conditions
        * @param string name of the table
        * @param array select, where, order_by, limit and return_type conditions
        */
        public function getRows($table,$conditions = array()){
            $sql = 'SELECT ';
            $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
            $sql .= ' FROM '.$table;
            if(array_key_exists("where",$conditions)){
                $sql .= ' WHERE ';
                $i = 0;
                foreach($conditions['where'] as $key => $value){
                    $pre = ($i > 0)?' AND ':'';
                    $sql .= $pre.$key." = '".$value."'";
                    $i++;
                }
            }
            
            if(array_key_exists("order_by",$conditions)){
                $sql .= ' ORDER BY '.$conditions['order_by']; 
            }
            
            if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
                $sql .= ' LIMIT '.$conditions['start'].','.$conditions['limit']; 
            }elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
                $sql .= ' LIMIT '.$conditions['limit']; 
            }
            
            $result = $this->db->query($sql);
            
            if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
                switch($conditions['return_type']){
                    case 'count':
                        $data = $result->num_rows;
                        break;
                    case 'single':
                        $data = $result->fetch_assoc();
                        break;
                    default:
                        $data = '';
                }
            }else{
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $data[] = $row;
                    }
                }
            }
            return !empty($data)?$data:false;
        }
        

        /*
        * Insert data from the database
        * @param string name of the table
        * @param array where condition on inserting data
        */
        public function insert($table,$para=array()){
            
            $table_columns = implode(',', array_keys($para));
            $table_value = implode("','", $para);

            $query="INSERT INTO $table($table_columns) VALUES('$table_value')";
                
            $insert = $this->db->query($query);

            return $insert?true:false;
            
        }
    }
?>