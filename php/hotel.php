<?php
$hotel = array(

    $hotel_1 => array(
        "name" => "Ocean Breeze Hotel",
        "roomRate" => 460,
        "discount" => 5,
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
        "name" => "Ghost Mountains Inn",
        "roomRate" => 1550,
        "discount" => 15,
        "offerPrice" => function(){
            $offerRate = this.roomRate * ((100 - this.discount)/100);
            return $offerRate;
        }
    ),

    $hotel_6 => array(
        "name" => "Radisson Blu Hotel",
        "roomRate" => 600,
        "discount" => 15,
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
        $this-> offerice = $offerPrice

    }
}







?>