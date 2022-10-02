<?php

seesion_start();

include("html/compare.html");

if(isset($_POST['compare'])){

    $hotel[] = file_get_content("hotelData.json");
    $hotel= json_decode($hotel);


    $input = array(

        'search' => $_POST['search'],
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'emailaddress' => $_POST['emailaddress'],
        'hotel' => $_POST['hotel'],
    )

    //append the input

    $hotel = $input;
    $hotel = json_encode($input, JSON_PRETTY_PRINT);
    file_put_contents("hotelData.json", $hotel);
    

}

class hotel{

    //properties

    private $hotelName;
    private $roomRate;
    private $offerRate;

    // setter method

    public function comparePrices(string $hotelName, int $roomRate, int $offerRate) {
        $this->hotelName = $hotelName;
        $this->roomRate = $roomRate;
        $this->offerPrice = $offerPrice;
        
    }

    //getter method

    public function getCheapest(){

    }
}

$hotel_1 = new hotel();
$hotel_1 -> comparePrices("City Lodge Hotel, Bloemfontein",600,30);
$hotel_1 -> getCheapest();

$hotel_2 = new hotel();
$hotel_2 -> comparePrices("Game View Lodge, Vryburg",400,400);
$hotel_2 -> getCheapest();

$hotel_3 = new hotel();
$hotel_3 -> comparePrices("Gateway Hotel, Durban",950,95);
$hotel_3 -> getCheapest();

$hotel_4 = new hotel();
$hotel_4 -> comparePrices("Ocean Breeze Hotel, Strand",460,460);
$hotel_4 -> getCheapest();

$hotel_5 = new hotel();
$hotel_5 -> comparePrices("Protea by Marriott Hotel, Kimberley",630,32);
$hotel_5 -> getCheapest();

$hotel_6 = new hotel();
$hotel_6 -> comparePrices("Radisson Blu Hotel, Port Elizabeth",600,90);
$hotel_6 -> getCheapest();

$hotel_7 = new hotel();
$hotel_7 -> comparePrices("Red Sand Country Lodge, Kalahari",865,86,5);
$hotel_7 -> getCheapest();

$hotel_8 = new hotel();
$hotel_8 -> comparePrices("Umlilo Lodge, St. Lucia",1550,232,5);
$hotel_8 -> getCheapest();




$hotel = array(

    $hotel_1 => array(
        "name" => "Ocean Breeze Hotel",
        "roomRate" => 460,
        "discount" => 0,
        "offerPrice" => function(){
            $offerRate = this.roomRate * ((100 - this.discount)/100);
            return $offerRate;
        }
    ),

    $hotel_2 => array(
        "name" => "Red Sand Country Lodge",
        "roomRate" => 865 ,
        "discount" => 10,
        "offerPrice" => function(){
            $offerRate = this.roomRate * ((100 - this.discount)/100);
            return $offerRate;
        }
    ),

    $hotel_3 => array(
        "name" => "Game view Lodge",
        "roomRate" => 400,
        "discount" => 0,
        "offerPrice" => function(){
            $offerRate = this.roomRate * ((100 - this.discount)/100);
            return $offerRate;
        }
    ),

    $hotel_4 => array(
        "name" => "City Lodge Hotel",
        "roomRate" => 600,
        "discount" => 5,
        "offerPrice" => function(){
            $offerRate = this.roomRate * ((100 - this.discount)/100);
            return $offerRate;
        }
    ),

    $hotel_5 => array(
        "name" => "Umilo Lodge, St Lucia",
        "roomRate" => 1550,
        "discount" => 15,
        "offerPrice" => function(){
            $offerRate = this.roomRate * ((100 - this.discount)/100);
            return $offerRate;
        }
    ),

    $hotel_6 => array(
        "name" => "Radisson Blu Hotel, Port Elizabeth",
        "roomRate" => 600,
        "discount" => 15,
        "offerPrice" => function(){
            $offerRate = this.roomRate * ((100 - this.discount)/100);
            return $offerRate;
        }
    ),

    $hotel_7 => array(
        "name" => "Gateway Hotel, Durban",
        "roomRate" => 950,
        "discount" => 5,
        "offerPrice" => function(){
            $offerRate = this.roomRate * ((100 - this.discount)/100);
            return $offerRate;
        }
    ),

    
    $hotel_8 => array(
        "name" => "Protea by Marriott Hotel, Kimberley",
        "roomRate" => 625,
        "discount" => 5,
        "offerPrice" => function(){
            $offerRate = this.roomRate * ((100 - this.discount)/100);
            return $offerRate;
        }
    ),
)

class hotel {

    // properties

    public $hotelName;
    public $roomRate;
    public $specialRate;

    //method

    funcion comparePrices($offerPrice){
        $this-> offerprice = $offerPrice;

    }

    function offerExpires ($expireMsg, $today){

        $weekfromtoday = getdate()
        $expireMsg = "Offer Expires Next";
        $expireMsg += $weekfromtoday['month'].$weekfromtoday['mday'].$weekfromtoday['year'];

        return $expireMsg;

    }
        

}







?>