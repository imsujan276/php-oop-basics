<?php

class Validator
{
    private $_errors;

    public function __construct()
    {
        $this->_errors = array();
    }

    public function human_name($field,$value)
    {
        $result = preg_match('/^[a-zA-Z. ]*$/',$value);
        if(!$result)
        {
            $this->_errors[]=array(
                $field =>"The $field is not valid format."
            );
        }
        return TRUE;
    }

    public function required($field,$value)
    {
        if(empty($value))
        {
            $this->_errors[]=array(
                $field =>"The $field is required."
            );
        }
        return TRUE;
    }

    public function check()
    {
        if(count($this->_errors)>0)
        {
            return FALSE;
        }
        return TRUE;
    }

    public function get_errors()
    {
        return $this->_errors;
    }
}