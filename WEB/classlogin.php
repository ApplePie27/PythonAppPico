<?php
    class login
    {
        //create admin base login
        private $uname = "ADMIN";//username
        private $psw = "1234";//password
        private $log = 0;

        //verifier le username
        public function getUname($value)
        {
            //s'assurer que la valeur entre soir du texte
            if(is_string($value))
            {
                if($this->uname == $value)
                {
                    $this->log = 1;
                }
                else
                {
                    $this->log = 0;
                }
            }
        }
        //verifier le password
        public function getPass($value)
        {
            //s'assurer que la valeur entre soir du texte
            if(is_string($value))
            {
                if(($this->psw == $value) && ($this->log == 1))
                {
                    $this->log += 1;
                }
                else
                {
                    $this->log = 0;
                }
            }
        }
        //envoyer login bon ou mauvais (0 == mauvais)
        public function tryLogin()
        {
            if($this->log == 0)
            {
                echo(0);
            }
            else if($this->log < 2)
            {
                echo(0);
            }
            else if($this->log == 2)
            {
                echo(1);
            }
        }
    }
?>