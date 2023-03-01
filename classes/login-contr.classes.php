<?php

class SignupContr extends Signup {

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;
      //constructor-- data grabbed from the user
    public function __construct($uid, $pwd, $pwdRepeat, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    public function signupUser() {
        if($this->emptyInput() == false) {
            //echo "Empty input!"
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false) {
            //echo "Invalid username!"
            header("location: ../index.php?error=username");
            exit();   
        }
        if($this->invalidEmail() == false) {
            //echo "Invalid email!"
            header("location: ../index.php?error=email");
            exit();   
        }
        if($this->pwdMatch() == false) {
            //echo "Password don't match!"
            header("location: ../index.php?error=passwordmatch");
            exit();   
        }
        if($this->uidTakenCheck() == false) 
        {
            //echo "Username or email taken!"
            header("location: ../index.php?error=usernameoremailtaken");
            exit();   
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput() {
        $result;
        if(empty($this->uid) || empty($this->pwd)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }


}