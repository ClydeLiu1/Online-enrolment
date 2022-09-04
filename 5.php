<?php

interface App {
    public function login($email);
    public function register($email,$username);
    public function logout();
}
class Facebook implements App{
    public function login($email){
        echo "login()-logged in with the email - $email";
    }
    public function register($email,$username){
        echo "register() - Registered with the email and username - $email and $username";

    }
    public function logout(){
        echo "logout() - User logged out";
    }
}
$facebook= new Facebook();
$facebook->login('clydeliu1@gamil.com');
$facebook->register('clydeliu1@gamil.com','Zihan Liu');
$facebook->logout();
?>