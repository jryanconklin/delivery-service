<?php

    class Vendor
    {
//Properties
        private $id;
        private $name;
        private $type_id;
        private $address_one;
        private $address_two;
        private $city;
        private $state;
        private $zip;
        private $country;

//Constructor
        function __construct($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id = null)
        {
            $this->id = $id;
            $this->name = $name;
            $this->type_id = $type_id;
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

        function getName()
        {
            return $this->name;
        }

        function getTypeId()
        {
            return $this->type_id;
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
        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function setTypeId($new_type_id)
        {
            $this->type_id = (integer) $new_type_id;
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
        function save()
        {
            $GLOBALS['DB']->exec(
            "INSERT INTO vendors (name, type_id, address_one, address_two, city, state, zip, country)
            VALUES (
                '{$this->getName()}',
                {$this->getTypeId()},
                '{$this->getAddressOne()}', '{$this->getAddressTwo()}',
                '{$this->getCity()}',
                '{$this->getState()}',
                {$this->getZip()},
                '{$this->getCountry()}'
                );"
            );
            $this->id = $GLOBALS['DB']->lastInsertId();
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
            $all_vendors = array();
            $returned_vendors = $GLOBALS['DB']->query("SELECT * FROM vendors;");

            foreach($returned_vendors as $vendor) {
                $id = $vendor['id'];
                $name = $vendor['name'];
                $type_id = $vendor['type_id'];
                $address_one = $vendor['address_one'];
                $address_two = $vendor['address_two'];
                $city = $vendor['city'];
                $state = $vendor['state'];
                $zip = $vendor['zip'];
                $country = $vendor['country'];

                $new_vendor = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

                array_push($all_vendors, $new_vendor);
            }
            return $all_vendors;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM vendors;");
        }

        static function findById()
        {

        }


//End Class
    }
?>
