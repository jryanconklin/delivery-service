<?php

    class Vendor
    {
//Properties
        private $id;
        private $name;
        private $typeId;
        private $addressOne;
        private $addressTwo;
        private $city;
        private $state;
        private $zip;
        private $country;

//Constructor
        function __construct($name, $typeId, $addressOne, $addressTwo, $city, $state, $zip, $country, $id = null)
        {
            $this->id = $id;
            $this->name = $name;
            $this->typeId = $typeId;
            $this->addressOne = $addressOne;
            $this->addressTwo = $addressTwo;
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

        function getName()
        {
            return $this->name;
        }

        function getTypeId()
        {
            return $this->typeId;
        }

        function getAddressOne()
        {
            return $this->addressOne;
        }

        function getAddressTwo()
        {
            return $this->addressTwo;
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
        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function setTypeId($new_typeId)
        {
            $this->typeId = (integer) $new_typeId;
        }

        function setAddressOne($new_address_one)
        {
            $this->addressOne = (string) $new_address_one;
        }

        function setAddressTwo($new_address_two)
        {
            $this->addressTwo = (string) $new_address_two;
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
        function save()
        {

        }

        function update($new_name, $new_type, $new_address_one, $new_address_two, $new_city, $new_state, $new_zip, $new_country)
        {

        }

        function delete()
        {

        }



//Static Methods
        static function getAll()
        {

        }

        static function deleteAll()
        {

        }

        static function findById()
        {

        }


//End Class
    }
?>
