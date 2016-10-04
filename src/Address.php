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
        function save()
        {
            $GLOBALS['DB']->exec(
            "INSERT INTO addresses (address_type, address_one, address_two, city, state, zip, country)
            VALUES (
                '{$this->getAddressType()}',
                '{$this->getAddressOne()}',
                '{$this->getAddressTwo()}',
                '{$this->getCity()}',
                '{$this->getState()}',
                {$this->getZip()},
                '{$this->getCountry()}'
                );"
            );
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        function update($new_type, $new_address_one, $new_address_two, $new_city, $new_state, $new_zip, $new_country)
        {
            $GLOBALS['DB']->exec(
            "UPDATE addresses
            SET address_type = '{$new_type}',
            address_one = '{$new_address_one}',
            address_two = '{$new_address_two}',
            city = '{$new_city}',
            state = '{$new_state}',
            zip = {$new_zip},
            country = '{$new_country}'
            WHERE id = {$this->getId()};");
            $this->setAddressType($new_type);
            $this->setAddressOne($new_address_one);
            $this->setAddressTwo($new_address_two);
            $this->setCity($new_city);
            $this->setState($new_state);
            $this->setZip($new_zip);
            $this->setCountry($new_country);
        }

        function delete()
        {
            $GLOBALS['DB']->exec("DELETE FROM addresses WHERE id = {$this->getId()};");
        }


//Static Methods
        static function getAll()
        {
            $all_addresses = array();
            $returned_addresses = $GLOBALS['DB']->query("SELECT * FROM addresses;");

            foreach($returned_addresses as $address) {
                $id = $address['id'];
                $address_type = $address['address_type'];
                $address_one = $address['address_one'];
                $address_two = $address['address_two'];
                $city = $address['city'];
                $state = $address['state'];
                $zip = $address['zip'];
                $country = $address['country'];

                $new_address = new Address($address_type, $address_one, $address_two, $city, $state, $zip, $country, $id);

                array_push($all_addresses, $new_address);
            }
            return $all_addresses;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM addresses;");
        }

        static function findById($search_id)
        {
            $addresses = $GLOBALS['DB']->query("SELECT * FROM addresses WHERE id = {$search_id};");
            foreach ($addresses as $address) {
                $id = $address['id'];
                $address_type = $address['address_type'];
                $address_one = $address['address_one'];
                $address_two = $address['address_two'];
                $city = $address['city'];
                $state = $address['state'];
                $zip = $address['zip'];
                $country = $address['country'];
                $found_address = new Address($address_type, $address_one, $address_two, $city, $state, $zip, $country, $id);
                return $found_address;
            }
        }


//End Class
    }
?>
