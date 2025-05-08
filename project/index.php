<?php


// parent class 
class ClsProduct{
    public string $name ;
    protected float $price ;
    public string $description;
    private string $_image ;
    
    public function  __construct($name, $des){
        $this -> name = $name;
        $this -> description = $des;
    }
    public function set_upload_image($image):string{
        return $this ->_image =$image;
    }
    public function get_upload_image():string{
        return $this -> _image;
    }

    public function set_price($price):float{
        return $this -> price = $price ;
    }

}

class ClsBook extends ClsProduct{
    private  $_publisher;
    private string $_wirter ;
    public string $color ;
    private $_supplier ;

    public function  __construct($witer, $color , $supplier ,$name , $des){
    parent::__construct($name, $des);
        $this -> _wirter = $witer ;
        $this -> color = $color ;
        $this -> _supplier = $supplier ;
    }

    public function set_publisher(array $publisher){
        return $this -> _publisher =$publisher;
    }
    
    // public function chooise_publisher($cho){
    //     foreach($this -> _publisher as $publisher){
    //         if($publisher == $cho){
    //             return $cho ;
    //         }
    //         echo "your chooise is not exists !! pls chooise right publihsher ";
    //         exit;
    //     }
    // }

    public function chooise_publisher(){
        $pub = array_rand($this->_publisher);
        return $this->_publisher[$pub];
    }
    public function show_all_publisher(){
        foreach($this -> _publisher as $publisher){
            echo "$publisher \t\t";
        }
    }
}

class ClsBabyCar extends ClsProduct{
    public int $age ;
    public float $weight ;
    private array $_meterials;
    private float $_tax;
    
    public function  __construct($age, $weight,$name , $des){
        parent::__construct($name, $des);
        $this -> age =$age;
        $this -> weight =$weight;
    }
    public function set_meterial(array $mat){
        
    return $this -> _meterials =$mat;
    }
    public function set_tax(float $tax){
        if($tax < 0){
            echo "pls enter true value ";
        }
    return $this ->_tax = $tax;
    }
    
    public function display_material(){
        foreach ($this ->_meterials as $material){
            echo "$material \t\t";
        }
    }
    public function get_final_price(){
    return ( $this ->price) + ($this ->_tax);
    }
}

$product = new ClsProduct("mostafa", "i am an engineering student, 21 years old, from Tanta");
$product->set_price(1000.5);
$product->set_upload_image("photo");
echo $product->get_upload_image()."<br>";
echo $product->name."<br>";
echo $product->description."<br>";
echo "<hr>";
//::::::::::::::::::::::::::::::::::::::::::::::::::::
$book = new ClsBook("mostafa", "blue", "elaraby", "mostafa","test data");
$book ->set_publisher(["ali ", "yasser", "sara","nadar"]);
// $book ->chooise_publisher("ali");
echo $book ->chooise_publisher()."<br>";
$book ->show_all_publisher()."<br>";
echo "<hr>";
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::
$car = new ClsBabyCar("10", 500 , "bmw", "anything");
$car ->set_price(1000);
$car ->set_tax(23);
$car ->set_meterial(["metal", "nanao", "test"]);
echo "<pre>";
$car ->display_material();
echo "</pre>";
echo $car ->get_final_price();
