<?php
require_once('db.php');
require_once('validator.php');
class User
{
    public $table='users';
    public $id ='id';

    public $name;
    public $email;
    public $password;
    
    public function register()
    {
        $encypt = md5($this->password);
        $time=time();
        return DB::query("INSERT INTO {$this->table} (name,email,password,created_at,updated_at) 
        VALUES('{$this->name}','{$this->email}','$encypt',$time,$time)");
    }
    
    public function validate()
    {
        $validator = new Validator();

        $validator->required('name',$this->name);
        $validator->human_name('name',$this->name);

        

    }


}
