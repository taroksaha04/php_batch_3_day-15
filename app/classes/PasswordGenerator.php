<?php


namespace App\classes;
class PasswordGenerator
{
    protected $length;
    protected $data = [];
    protected $password;
    protected $i;
    protected $index;
    protected $pass;

    public function __construct($post = null)
    {
        $this->data = ['#','@','1','A','a',')','6','!','G','9','*','5'];
        $this->length = $post['password_length'];
    }
    public function newPassword()
    {
//        echo 'Hello';
//        echo $this->length;

        for($this->i = 0; $this->i<$this->length;$this->i++)
        {
//            echo $this->data[$this->i];
            $this->index = rand(0,11);
            $this->password.= $this->data[$this->index];
        }
        return $this->password;

    }

}