<!-- Inserts product information rather than manually doing it in phpmyadmin -->
<?php
    class CreateDb
    {
            public $servername;
            public $username;
            public $password;
            public $dbname;
            public $tablename;
            public $tablename1;
            public $tablename2;
            public $tablename3;
            public $tablename4;
            public $con;
    
    
            // class constructor
        public function __construct(
            $dbname = "Productdb",
            $tablename = "preworkout",
            $tablename1 = "multivitamins",
            $tablename2 = "massgainers",
            $tablename3 = "proteinshakes",
            $tablename4 = "creatine",
            $servername = "localhost",
            $username = "root",
            $password = ""
        )
        {
          $this->dbname = $dbname;
          $this->tablename = $tablename;
          $this->tablename1 = $tablename1;
          $this->tablename2 = $tablename2;
          $this->tablename3 = $tablename3;
          $this->tablename4 = $tablename4;
          $this->servername = $servername;
          $this->username = $username;
          $this->password = $password;
    
          // create connection
            $this->con = mysqli_connect($servername, $username, $password);
    
            // Check connection
            if (!$this->con){
                die("Connection failed : " . mysqli_connect_error());
            }
    
            // query
            $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    
            // execute query FOR Pre-Workout
            if(mysqli_query($this->con, $sql,)){
    
                $this->con = mysqli_connect($servername, $username, $password, $dbname);
    
                // sql to create new table


                //FOR Whey Queen Pre-Workout
                $sql = " CREATE TABLE IF NOT EXISTS $tablename
                                (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                 product_name VARCHAR (25) NOT NULL,
                                 product_price FLOAT,
                                 product_image VARCHAR (100)
                                );
                        ";
                
                if (!mysqli_query($this->con, $sql)){
                    echo "Error creating table : " . mysqli_error($this->con);
                }
            
            }else{
                return false;
            }

            // execute query FOR Multi-Vitamins
            if(mysqli_query($this->con, $sql,)){
    
                $this->con = mysqli_connect($servername, $username, $password, $dbname);
    
                // sql to create new table


                //FOR Whey Queen Multi-Vitamins
                $sql = " CREATE TABLE IF NOT EXISTS $tablename1
                                (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                 product_name VARCHAR (25) NOT NULL,
                                 product_price FLOAT,
                                 product_image VARCHAR (100)
                                );
                        ";
                
                if (!mysqli_query($this->con, $sql)){
                    echo "Error creating table : " . mysqli_error($this->con);
                }
            
            }else{
                return false;
            }


            // execute query FOR Mass Gainers
            if(mysqli_query($this->con, $sql,)){
    
                $this->con = mysqli_connect($servername, $username, $password, $dbname);
    
                // sql to create new table


                //FOR Whey Queen Mass Gainers
                $sql = " CREATE TABLE IF NOT EXISTS $tablename2
                                (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                 product_name VARCHAR (25) NOT NULL,
                                 product_price FLOAT,
                                 product_image VARCHAR (100)
                                );
                        ";
                
                if (!mysqli_query($this->con, $sql)){
                    echo "Error creating table : " . mysqli_error($this->con);
                }
            
            }else{
                return false;
            }


            // execute query FOR Protein Shakes
            if(mysqli_query($this->con, $sql,)){
    
                $this->con = mysqli_connect($servername, $username, $password, $dbname);
    
                // sql to create new table


                //FOR Whey Queen Protein Shakes
                $sql = " CREATE TABLE IF NOT EXISTS $tablename3
                                (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                 product_name VARCHAR (25) NOT NULL,
                                 product_price FLOAT,
                                 product_image VARCHAR (100)
                                );
                        ";
                
                if (!mysqli_query($this->con, $sql)){
                    echo "Error creating table : " . mysqli_error($this->con);
                }
            
            }else{
                return false;
            }



            // execute query FOR Creatine
            if(mysqli_query($this->con, $sql,)){
    
                $this->con = mysqli_connect($servername, $username, $password, $dbname);
    
                // sql to create new table


                //FOR Whey Queen Creatine
                $sql = " CREATE TABLE IF NOT EXISTS $tablename4
                                (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                 product_name VARCHAR (25) NOT NULL,
                                 product_price FLOAT,
                                 product_image VARCHAR (100)
                                );
                        ";
                
                if (!mysqli_query($this->con, $sql)){
                    echo "Error creating table : " . mysqli_error($this->con);
                }
            
            }else{
                return false;
            }






        }

            
        
        // get Pre-Workout from the database
        public function getData(){
            $sql = "SELECT * FROM $this->tablename";
    
            $result = mysqli_query($this->con, $sql);
    
            if(mysqli_num_rows($result) > 0){
                return $result;
            }
        }


        // get Multi-Vitamins from the database
        public function getData1(){
            $sql = "SELECT * FROM $this->tablename1";
    
            $result = mysqli_query($this->con, $sql);
    
            if(mysqli_num_rows($result) > 0){
                return $result;
            }
        }

        // get Mass Gainers from the database
        public function getData2(){
            $sql = "SELECT * FROM $this->tablename2";
    
            $result = mysqli_query($this->con, $sql);
    
            if(mysqli_num_rows($result) > 0){
                return $result;
            }
        }

        // get Mass Gainers from the database
        public function getData3(){
            $sql = "SELECT * FROM $this->tablename3";
    
            $result = mysqli_query($this->con, $sql);
    
            if(mysqli_num_rows($result) > 0){
                return $result;
            }
        }

        // get Mass Gainers from the database
        public function getData4(){
            $sql = "SELECT * FROM $this->tablename4";
    
            $result = mysqli_query($this->con, $sql);
    
            if(mysqli_num_rows($result) > 0){
                return $result;
            }
        }




    }