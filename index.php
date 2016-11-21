PHP Source:
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
class Truck1 {
    function __construct() {
        $this->title = "Dodge";
        $this->img = "http://i.imgur.com/eZskvWV.jpg";
        $this->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    }
}
?>

<?php
class Truck2 {
    function __construct() {
        $this->title = "Ford";
        $this->img = "http://i.imgur.com/0aqmL1O.jpg";
        $this->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    }
}
?>

<?php
class Truck3 {
    function __construct() {
        $this->title = "Chevy";
        $this->img = "http://i.imgur.com/nzxxXgz.jpg";
        $this->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    }
}
?>


<div class="col-md-4">
    <div class="col-md-4">
        <img src="<?php $truck = new Truck1();
        echo $truck -> img; ?>">
    </div>
    <div class="col-md-8">
        <h2><?php $truck = new Truck1();
            echo $truck -> title; ?></h2>
        <p><?php $truck = new Truck1();
            echo $truck -> description; ?></p>
    </div>
</div>
<div class="col-md-4">
    <div class="col-md-4">
        <img src="<?php $truck = new Truck2();
        echo $truck -> img; ?>">
    </div>
    <div class="col-md-8">
        <h2><?php $truck = new Truck2();
            echo $truck -> title; ?></h2>
        <p><?php $truck = new Truck2();
            echo $truck -> description; ?></p>
    </div>
</div>
<div class="col-md-4">
    <div class="col-md-4">
        <img src="<?php $truck = new Truck3();
        echo $truck -> img; ?>">
    </div>
    <div class="col-md-8">
        <h2><?php $truck = new Truck3();
            echo $truck -> title; ?></h2>
        <p><?php $truck = new Truck3();
            echo $truck -> description; ?></p>
    </div>
</div>


</body>
</html>