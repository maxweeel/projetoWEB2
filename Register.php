<?php

namespace QI\VirtualLibary\Model;


class User
 {
    private $id;
    private $nome;
    private $email;
    private $password;

   /**
    * This method creat a new User object
    * @param string $email
    */
    public function __construct($email)
    {
        $this->email = $email;
    }

    public function __get($attribute)
    {
        return $this->$attribute;
    }
    public function __set($attribute,$value)
    {
        $this->$attribute = $value;
    }
 }
