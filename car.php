<html>
<body>

<?php
class Car {
    function Car() {
        $this->model = "VW";
    }
}

$herbie = new Car();
echo $herbie->model;
?>

</body>
</html>