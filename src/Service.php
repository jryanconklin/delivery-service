<?php

    class Service
    {
        private $name;
        private $description;
        private $type_id;
        private $id;

        function __construct($name, $description, $type_id, $id=null)
        {
            $this->name = $name;
            $this->description = $description;
            $this->type_id = $type_id;
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

        function setDescription($new_description)
        {
            $this->description = (string) $new_description;
        }
        function getDescription()
        {
            return $this->description;
        }

        function setTypeId($new_type_id)
        {
            $this->type_id = $new_type_id;
        }
        function getTypeId()
        {
            return $this->type_id;
        }

        function setId($new_id)
        {
            $this->id = $new_id;
        }
        function getId()
        {
            return $this->id;
        }

        function save()
        {
          $GLOBALS['DB']->exec(
          "INSERT INTO services (name, description, type_id)

          VALUES ('{$this->getName()}', '{$this->getDescription()}', {$this->getTypeId()});");

          $this->id = $GLOBALS['DB']->lastInsertId();
        }

        function addRider($new_rider)
        {
            $GLOBALS['DB']->exec("INSERT INTO riders_services (service_id, rider_id) VALUES ({$this->getId()}, {$new_rider->getId()});");
        }

        function getRiders()
        {
            $returned_riders = $GLOBALS['DB']->query("SELECT riders.* FROM services
                JOIN riders_services ON (riders_services.service_id = services.id)
                JOIN riders ON (riders.id = riders_services.rider_id)
                WHERE services.id = {$this->getId()};");
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

//Static Methods
        static function getAll()
        {
            $returned_services = $GLOBALS['DB']->query("SELECT * FROM services;");
            $services = array();
            foreach($returned_services as $service) {
                $name = $service['name'];
                $description = $service['description'];
                $type_id = $service['type_id'];
                $id = $service['id'];
                $new_service = new Service($name, $description, $type_id, $id);
                array_push($services, $new_service);
            }
            return $services;
        }
        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM services;");
        }

        static function find($search_id)
        {
            $found_service = null;
            $services = Service::getAll();
            foreach($services as $service){
                $service_id = $service->getId();
                if($service_id == $search_id) {
                  $found_service = $service;
                }
            }
            return $found_service;
        }
    }
?>
