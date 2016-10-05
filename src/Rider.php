<?php

    class Rider
    {
        private $name;
        private $phone;
        private $location;
        private $available;
        private $id;

        function __construct($name, $phone, $location, $available = 1, $id=null)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->location = $location;
            $this->available = $available;
            $this->id = $id;
        }
//Getter and Setter Methods
        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }
        function getName()
        {
            return $this->name;
        }

        function setPhone($new_phone)
        {
            $this->phone = (string) $new_phone;
        }
        function getPhone()
        {
            return $this->phone;
        }

        function setLocation($new_location)
        {
            $this->location = (string) $new_location;
        }
        function getLocation()
        {
            return $this->location;
        }

        function setAvailable($new_available)
        {
            $this->available = (string) $new_available;
        }
        function getAvailable()
        {
            return $this->available;
        }

        function getId()
        {
            return $this->id;
        }

//Regular Methods
        function save()
        {
            $GLOBALS['DB']->exec(
            "INSERT INTO riders (name, location, phone, available)
            VALUES (
                '{$this->getName()}',
                '{$this->getLocation()}',
                '{$this->getPhone()}',
                {$this->getAvailable()}
                );"
            );
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        function update($new_name, $new_phone, $new_location, $new_available)
        {
            $GLOBALS['DB']->exec(
            "UPDATE riders
            SET name = '{$new_name}',
            phone = '{$new_phone}',
            location = '{$new_location}',
            available = {$new_available}
            WHERE id = {$this->getId()};");
            $this->setName($new_name);
            $this->setPhone($new_phone);
            $this->setLocation($new_location);
            $this->setAvailable($new_available);
        }


        function addService($new_service)
        {
            $GLOBALS['DB']->exec("INSERT INTO riders_services (rider_id, service_id) VALUES ({$this->getId()}, {$new_service->getId()});");
        }

        function getServices()
        {
            $returned_services = $GLOBALS['DB']->query("SELECT services.* FROM riders
                JOIN riders_services ON (riders_services.rider_id = riders.id)
                JOIN services ON (services.id = riders_services.service_id)
                WHERE riders.id = {$this->getId()};");
            $services = array();
            foreach($returned_services as $service) {
                $name = $service['name'];
                $description = $service['description'];
                $type_id = $service['type_id'];
                $url = $service['url'];
                $id = $service['id'];
                $new_service = new Service($name, $description, $type_id, $url, $id);
                array_push($services, $new_service);
            }
            return $services;
        }

        function delete()
        {
            $GLOBALS['DB']->exec("DELETE FROM riders WHERE id = {$this->getId()};");
        }

//Static Methods
        static function getAll()
        {
            $returned_riders = $GLOBALS['DB']->query("SELECT * FROM riders;");
            $riders = array();
            foreach($returned_riders as $rider) {
                $name = $rider['name'];
                $phone = $rider['phone'];
                $location = $rider['location'];
                $available = $rider['available'];
                $id = $rider['id'];
                $new_rider = new Rider($name, $phone, $location, $available, $id);
                array_push($riders, $new_rider);
            }
            return $riders;
        }


        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM riders;");
        }

        static function find($search_id)
        {
            $found_rider = null;
            $riders = Rider::getAll();
            foreach($riders as $rider){
                $rider_id = $rider->getId();
                if($rider_id == $search_id) {
                  $found_rider = $rider;
                }
            }
            return $found_rider;
        }

        static function checkEligibility($service_id)
        {
            $all_riders = Rider::getAll();
            $eligible_riders = array();
            foreach ($all_riders as $rider) {
                # code...
            }
        }

        static function checkAvailability()
        {

        }
    }
?>
