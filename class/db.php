<?php

class DB{

	private static $instance;
    private $_conn;

    public  function __construct()
    {

        $username='root';
        $password='toor';
        $database='phps_oop';
        $server='localhost';

        // Try and connect to the database
        $this->_conn = mysqli_connect($server,$username,$password,$database);

        // If connection was not successful, handle the error
        if($this->_conn === false) 
        {
            die('FAILED TO CONNECT IN DB');
        }
    }
    public static function init() 
    {
		if(self::$instance instanceof self) 
        {
			return false;
		}		
		self::$instance = new self();
	}
    
    public static function test()
    {
        echo 'im function';
    }
}

DB::init();