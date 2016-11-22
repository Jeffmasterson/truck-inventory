<?php
class Truck {

    function __construct($inventory_id,$title,$thumb_url,$decription,$rating) {
        $this->inventory_id = $inventory_id;
        $this->title = $title;
        $this->thumb_url = $thumb_url;
        $this->description = $decription;
        $this->rating = $rating;
        $this->weight = 'Unknown';
        $this->tireesize = 'Unknown';
        $this->trucksold = false;
    }

    ///Do API call here
    function ifSold() {
        if($this->title=='Dodge') {
            return true;
        }
        elseif($this->title=='Chevy') {
            return true;
        }
        else {
            return false;
        }

    }
}
class Lot {

    function inventory() {

    }
}

$truck1 = new Truck(10,'Dodge','http://i.imgur.com/eZskvWV.jpg','The best of them all. Dodges are for people with big dicks. Dodge Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','5');
$truck2 = new Truck(11,'Ford','http://i.imgur.com/0aqmL1O.jpg','This one is okay. It screams I have a medium s   asdf asd f  asdfized weiner, sed do eiusmod te  asdf     f asdfa sd fadsfasdfasdf  asdfmpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','5');
$truck3 = new Truck(12,'Chevy','http://i.imgur.com/nzxxXgz.jpg','Small weiner alert. Sean wishes he had a chevy, sed do eiusmod tempor incididunt ut labore ddddd fe f ef  asdfasdfet asdfgr asdf sdht e asdfasdfasfdqdfadf t dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','5');
$truck3->weight = 4000;
$truck3->tireesize = '27r';
$truck3->trucksold = true;

$truck4 = new Truck(13,'Dodge','http://i.imgur.com/nzxxXgz.jpg','Small weiner alert. Sean wishes he had a chevy, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','');

$trucks = array($truck1, $truck2, $truck3, $truck4);

?>