<?php

class SignupContr {

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    //constructor-- data grabbed from the user
    public function _construct($uid, $pwd, $pwdRepeat, $email){
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    //error handlers
    #empty inputs

    private function emptyInput(){
        $result;
        if(empty(this->$uid || empty(this->$pwd || empty(this->$pwdRepeat || empty(this->$email)){
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
    
    #regex error handler checking for alphanumeric characters in our uid
    private function invalidUid() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/")){
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

}