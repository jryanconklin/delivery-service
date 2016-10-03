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
          $GLOBALS['DB']->exec("INSERT INTO services (name, description, type_id) VALUES ('{$this->getName()}', '{$this->getDescription()}', {$this->getTypeId()});");
          $this->id = $GLOBALS['DB']->lastInsertId();
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


//         static function deleteAll()
//         {
//             $GLOBALS['DB']->exec("DELETE FROM riders;");
//         }
//
//         static function find($search_id)
//         {
//             $found_rider = null;
//             $riders = Rider::getAll();
//             foreach($riders as $rider){
//                 $rider_id = $rider->getId();
//                 if($rider_id == $search_id) {
//                   $found_rider = $rider;
//                 }
//             }
//             return $found_rider;
//         }
// //End Class
    }
?>
