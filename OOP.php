<?php

// info: first test class -------------------
// hack: first test class -------------------
// idea: first test class -------------------
// fixme: first test class ------------------

/*  OOP in php

    0- access modifiers public private protected 
    1- constructors
    2- destructores 
    3- constant static method 
    4- inheritance               
    5- function overriding       ::::::::::::
    6- parameterized constructor ::::::::::::
    7- interfaces :
    8- traits
    9- polymophism 
    10- final class can't allow any class to inheritance from him ::::::::::: final class ClsPerson {  }
    11- abstract methods to force the user to use this function in class they inherit
*/

class ClsPerson{
    private $_first_name;
    private $_last_name;
    private $_age;
    private $_email;
    private $_password;
    const LENGTH =1; 
    // constructor *****************
    function __construct($f_name , $l_name, $c_age, $c_email, $c_password ){
        $this ->_first_name = $f_name;
        $this ->_last_name = $l_name;
        $this ->_age = $c_age;
        $this ->_email = $c_email;
        $this ->_password = $c_password;
    }
  // statci function ****************
    public static function print(){
        echo "welcome to be in oop ";
    }

    
    public function set_first_name($first_name){

        if(strlen($first_name < self::LENGTH)){
            echo "charater of name must be greater than 1 <br>";
        }
        else{
            return $this -> _first_name =$first_name;
        }
    }
    public function get_first_name(){
        return $this -> _first_name ;
    }

    public function set_last_name($last_name){
        if(strlen($last_name < self::LENGTH)){
            echo "charater of name must be greater than 1 <br>";
            
        }
        else{
            return $this -> _first_name =$last_name;
        }
    }
    public function get_last_name(){
        return $this -> _last_name ;
    }

    public function set_password($password){
        if(strlen($password < self::LENGTH)){
            echo "charater of password must be greater than 1 <br>";
            
        }
        else{
            return $this -> _password =$password;
        }
    }
    public function get_password(){
        return $this -> _password ;
    }

    public function set_age($age){
        if($age < self::LENGTH){
            echo "age must be greater than 1 <br>";
            
        }
        else{
            return $this -> _age =$age;
        }
    }
    public function get_age(){
        return $this -> _age ;
    }

    public function set_email($email){
        if(strlen($email < self::LENGTH)){
            echo "charater of {$email} must be greater than 1 <br>";
            
        }
        else{
            return $this -> _email =$email;
        }
    }
    public function get_email(){
        return $this -> _email ;
    }

    public function print_user_data(){
        // $fname    = $this -> get_first_name() ?? "not found first name" ;
        echo "{$this -> _first_name}  <br>";

        // $lname    = $this -> get_last_name()  ?? "not found last name " ;
        echo "{$this -> _last_name} <br>";

        // $age      = $this -> get_age()        ?? "not found age " ;
        echo "{$this -> _age} <br>";

        // $email    = $this -> get_email()      ?? "not found email " ;
        echo "{$this -> _email} <br>";

        // $password = $this -> get_password()   ?? "not found password " ;
        echo "{$this -> _password} <br>";
    }

    function __destruct(){
        echo "succssfully ended !";
    }
}

// inheritance sub class from super class ( extends = : )
class ClsExtraData extends ClsPerson{
    private $_job;
    private $_salary;

    function __construct($f_name, $l_name, $c_age, $c_email, $c_password, $c_job, $c_salary)  {
         // Call the parent class constructor
        parent::__construct($f_name, $l_name, $c_age, $c_email, $c_password);
        
         // Initialize ClsExtraData specific properties
        $this->_job = $c_job;
        $this->_salary = $c_salary;
    }  
    
    // abstract meth


    public function set_job($job){
        if(strlen($job < self::LENGTH)){
            echo "charater of {$job} must be greater than 1 <br>";  
        }
        else{
            return $this -> _job =$job;
        }
    }
    public function get_job(){
        return $this -> _job ;
    }

    public function set_salary($salary){
        if($salary < self::LENGTH){
            echo "salary must be greater than 1 <br>";  
        }
        else{
            return $this -> _salary =$salary;
        }
    }
    public function get_salary(){
        return $this -> _salary ;
    }

    //function overriding 
    public function print_user_data(){
        ClsPerson :: print_user_data();
        echo " {$this ->_job} <br>";
        echo " {$this ->_salary} <br>";
    }

}



// ::::::::::::::::::::: super class ClsPerson ::::::::::::::::::::::
ClsPerson::print();
echo "<hr>";

echo ClsPerson::LENGTH;
echo "<hr>";

$person1 = new ClsPerson("mustafa", "elkhokhy", 21, "mustafaelkhokhy@gmail.com", "sdf565sfd3") ;
// to check if object is instance of class or not and return ture or false
// print_r($person1 instanceof ClsPerson);
// echo "<hr>" ;

echo $person1::LENGTH;
echo "<hr>";

$person1 -> set_first_name("mostafa");
$person1 -> set_last_name("khaled");
$person1 -> set_email("mostafa@gmail.com");
$person1 -> set_age(21);
$person1 -> set_password("5s4f5e8f4");
// echo "<hr>";
$person1 -> print_user_data();
echo "<hr>" ;
echo " sub class inhertance from super class ::::::::::: <br>" ;
echo "<hr>" ;

// :::::::::::::::::::::  sub class ClsExtraData :::::::::::::::::::::::::::::::::


$extra_data = new ClsExtraData( "mustafa", "elkhokhy", 21, "mustafaelkhokhy@gmail.com", "sdf565sfd3","backend developer" , 50000) ;

$extra_data -> set_job("backend developer");
$extra_data -> set_salary(100000);

$extra_data -> print_user_data();


