<?php
    
    class login{
    
    private $username;
    private $password;
    private $error;
            
        function __construct($username, $password){
            
            $this->username = $username;
            
            require_once('encrypt.php');
            $this->password = encrypt($password, "ultrageheimerschluessel");    
            
        }
        
        function isAdmin(){
            
            require_once('connect.php');
            
                $request = mysql_query("SELECT username FROM admin WHERE username = '$this->username'") or die(mysql_error());
                $request = mysql_fetch_row($request);
                
                    if($request){
                        return true;
                    }
                    else{
                        return false;
                    }           
        }
        
        function isUser(){

            require_once('connect.php');

                $request = mysql_query("SELECT username FROM user WHERE username = '$this->username'") or die(mysql_error());
                $request = mysql_fetch_row($request);

                    if($request){
                        return true;
                    }
                    else{
                        header("Location:../login.php?error=username");
                    }            
        }
        
            function adminLogin(){
            
                require_once('connect.php');
                
                    $request = mysql_query("SELECT password FROM admin WHERE username = '$this->username'");
                    $request = mysql_fetch_object($request);
                    
                        if($request->password == $this->password){
                            session_start();
                            $_SESSION['password'] = $this->password;
                            $_SESSION['username'] = $this->username;
                            $_SESSION['security'] = 'cms';                            
            
                            header('Location: ../../cms/index.php');                            
                        }
                        else{
                            header("Location:../login.php?error=password");                            
                        }
            }

            function userLogin(){

                require_once('connect.php');

                    $request = mysql_query("SELECT password FROM user WHERE username = '$this->username'");
                    $request = mysql_fetch_object($request);

                        if($request->password == $this->password){
                            session_start();
                            $_SESSION['password'] = $this->password;
                            $_SESSION['username'] = $this->username;
                            $_SESSION['security'] = 'crs';

                            header('Location: ../crs/index.php');
                        }
                        else{
                            header("Location:../login.php?error=password");                            
                        }
            }        
        
    }
    
    $login = new login($_POST['username'], $_POST['password']);
    $login->isAdmin();
        if($login->isAdmin() == true){
            $login->adminLogin();
        }
        else{
            $login->isUser();
                if($login->isUser() == true){
                    $login->userLogin();
                }
        }




?>