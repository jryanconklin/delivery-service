<?php

    class Rider
    {
        private $name;
        private $id;

        function __construct($name, $id=null)
        {
            $this->name = $name;
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

        function setId($new_id)
        {
            $this->id = (string) $new_id;
        }
        function getId()
        {
            return $this->id;
        }

//Regular Methods
        function save()
        {
          $GLOBALS['DB']->exec("INSERT INTO riders (name) VALUES ('{$this->getName()}');");
          $this->id = $GLOBALS['DB']->lastInsertId();
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
                $id = $service['id'];
                $new_service = new Service($name, $description, $type_id, $id);
                array_push($services, $new_service);
            }
            return $services;
        }

//Static Methods
        static function getAll()
        {
            $returned_riders = $GLOBALS['DB']->query("SELECT * FROM riders;");
            $riders = array();
            foreach($returned_riders as $rider) {
                $name = $rider['name'];
                $id = $rider['id'];
                $new_rider = new Rider($name, $id);
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
//End Class
    }
?>
