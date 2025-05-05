<?php


/*      ::::::::::::  search :::::::::::::

        i make the ex to explain the status 

        :::::::::  1-  magic methods   ::::::::::::::::
    1- constructors >>>>  public function  __construct( , , ){ }
        can take param or not 
        is the same name of class in another lang but 
        make inizilion to carry variables in  the class when program 
        start it be starting ,can make overriding .  show the example 
    -------------------------------------------------------------------
    3- destructores >>> public  function __destruct(){}
    not take param it calling after finsh the program 
    ----------------------------------------------------
    3- call >>>>>     public function __call ($method , $params){ put var of method and var of params }
        developer methods if i use private method or calling method is not exist show the massage 
    ---------------------------------------------------------------------------------------------------------
    4- get and set method is the standard type use when make properties private 
    ----------------------------------------------------------------------------
    5- clone  public function __clone(){ }
    with properties and with method  
    $main = new ClsPerson()  ;      
    $copy = clone $main 
    when access  copy by different value it appear with this value and main object appear with old value 
    the method use when make the copy object and u need to save the data on old object u but clone 
    ------------------------------------------------------------------------------------------------------
_______________________________________________________________________________________________________________________________________________
                            :::::::: absract and interface ::::::::::::::::

    1- abstract methods   abstract public function conn() ;    |  2- interface 
    force the user to use this function in class they inherit  |    force the user to use this function in class they inherit ex in line 280
    ex:                                                        |   is function can used with same name from interface class and use to give 
    abstract class Car {                                       |   pure virtual function 
    public $name;                                              |
    public function __construct($name) {                       |
    $this->name = $name;   }                                   |
    abstract public function intro() : string; }               |
class Audi extends Car {                                       |
        public function intro() : string {                     |
    return "Choose German quality! I'm an $this->name!";       |
    }                                                          |
}                                                              |
____________________________________________________________________________________________________________________________________________

*/

/*  OOP in php
    0- access modifiers public private protected 
    1- constructors
    2- destructores 
    3- constant static method 
    4- inheritance               
    5- function overriding       ::::::::::::
    6- parameterized constructor ::::::::::::
    7- interfaces :
    8- traits it help in single inheritance
    9- polymophism 
    10- final class can't allow any class to inheritance from him ::::::::::: final class ClsPerson {  }
    11- abstract methods to force the user to use this function in class they inherit
    12- return $this; to return all of data in the same line
*/



// interface concept
interface IntId{
    public function id();
}

class ClsPerson implements IntId{
    private $_first_name;
    private $_last_name;
    private $_age;
    private $_email;
    private $_password;
    const LENGTH =1; 
    private $_id = 10;

    // interface 
    public function id(){
        return $this -> _id ;
    }
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
    // abstract
   
    
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

echo "id = " .$extra_data -> id();
echo "<hr>" ;
$extra_data -> print_user_data();



/************************** iterface and polymophism ************** */
echo "<hr>" ;
echo "<hr>" ;
interface Notifier {
    public function send($message);
}
class EmailNotifier implements Notifier {
    public function send($message) {
        return "Sending email with message: $message";
    }
}
class SMSNotifier implements Notifier {
    public function send($message) {
        return "Sending SMS with message: $message";
    }
}
class PushNotifier implements Notifier {
    public function send($message) {
        return "Sending push notification with message: $message";
    }
}
function notify(Notifier $notifier, $message) {
    echo $notifier->send($message) . "<br>";
}

$email = new EmailNotifier();
$sms = new SMSNotifier();
$push = new PushNotifier();

notify($email, "Hello via Email!");
notify($sms, "Hello via SMS!");    
notify($push, "Hello via Push!"); 
