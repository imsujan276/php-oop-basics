<?php

class DB{

	private static $instance;
    private $_conn;

    public  function __construct()
    {

        $username='root';
        $password='toor';
        $database='php_oop';
        $server='localhost';

        // Try and connect to the database
        $this->_conn = mysqli_connect($server,$username,$password,$database);

        // If connection was not successful, handle the error
        if($this->_conn === FALSE) 
        {
            die('FAILED TO CONNECT IN DB');
        }
    }

    public static function init() 
    {
		if(self::$instance instanceof self) 
        {
			return FALSE;
		}		
		self::$instance = new self();
	}
    
    public static function query($query)
    {
        $return = mysqli_query(self::$instance->_conn,$query);

        if(!$return)
        {
            die('error query: '.self::$instance->_conn->error);
        }

        return $return;
    }
}

DB::init();