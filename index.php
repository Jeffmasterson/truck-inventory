
<!DOCTYPE html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<html>
<body>

<?php
class Truck {
    function __construct($title,$thumb_url,$decription) {
        $this->title = $title;
        $this->thumb_url = $thumb_url;
        $this->description = $decription;

    }
}
$truck1 = new Truck('Dodge','http://i.imgur.com/eZskvWV.jpg','The best of them all. Dodges are for people with big dicks. Dodge Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
$truck2 = new Truck('Ford','http://i.imgur.com/0aqmL1O.jpg','This one is okay. It screams I have a medium sized weiner, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
$truck3 = new Truck('Chevy','http://i.imgur.com/nzxxXgz.jpg','Small weiner alert. Sean wishes he had a chevy, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
?>



<div class="col-md-4">
    <div class="col-md-4">
        <img src="<?=$truck1->thumb_url;?>">
    </div>
    <div class="col-md-8">
        <h2><?=$truck1->title;?></h2>
        <p><?=$truck1->description;?></p>
    </div>
</div>
<div class="col-md-4">
    <div class="col-md-4">
        <img src="<?=$truck2->thumb_url;?>">
    </div>
    <div class="col-md-8">
        <h2><?=$truck2->title;?></h2>
        <p><?=$truck2->description;?></p>
    </div>
</div>
<div class="col-md-4">
    <div class="col-md-4">
        <img src="<?=$truck3->thumb_url;?>">
    </div>
    <div class="col-md-8">
        <h2><?=$truck3->title;?></h2>
        <p><?=$truck3->description;?></p>
    </div>
</div>


</body>
</html>

