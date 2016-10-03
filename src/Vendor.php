<?php

    class Vendor
    {
//Properties
        private $id;
        private $name;
        private $type;
        private $address1;
        private $address2;
        private $city;
        private $state;
        private $zip;
        private $country;

//Constructor
        function __construct($name, $type, $address1, $address2, $city, $state, $zip, $country, $id = null)
        {
            $this->id = $id;
            $this->name = $name;
            $this->type = $type;
            $this->address1 = $address1;
            $this->address2 = $address2;
            $this->city = $city;
            $this->state = $state;
            $this->zip = $zip;
            $this->country = $country;
        }

//Getter and Setter Methods




//Regular Methods







//Static Methods






//End Class
    }
?>
