<?php

    class Address
    {
//Properties
        private $id;
        private $address_type;
        private $address_one;
        private $address_two;
        private $city;
        private $state;
        private $zip;
        private $country;


//Constructor
        function __construct($address_type, $address_one, $address_two, $city, $state, $zip, $country, $id = null)
        {
            $this->id = $id;
            $this->address_type = $address_type;
            $this->address_one = $address_one;
            $this->address_two = $address_two;
            $this->city = $city;
            $this->state = $state;
            $this->zip = $zip;
            $this->country = $country;
        }


//Getter and Setter Methods
        //Getters
        function getId()
        {
            return $this->id;
        }

        function getAddressType()
        {
            return $this->address_type;
        }

        function getAddressOne()
        {
            return $this->address_one;
        }

        function getAddressTwo()
        {
            return $this->address_two;
        }

        function getCity()
        {
            return $this->city;
        }

        function getState()
        {
            return $this->state;
        }

        function getZip()
        {
            return $this->zip;
        }

        function getCountry()
        {
            return $this->country;
        }

        //Setters
        function setAddressType($new_address_type)
        {
            $this->address_type = (string) $new_address_type;
        }

        function setAddressOne($new_address_one)
        {
            $this->address_one = (string) $new_address_one;
        }

        function setAddressTwo($new_address_two)
        {
            $this->address_two = (string) $new_address_two;
        }

        function setCity($new_city)
        {
            $this->city = (string) $new_city;
        }

        function setState($new_state)
        {
            $this->state = (string) $new_state;
        }

        function setZip($new_zip)
        {
            $this->zip = (integer) $new_zip;
        }

        function setCountry($new_country)
        {
            $this->country = (string) $new_country;
        }


//Regular Methods







//Static Methods






//End Class
    }
?>
