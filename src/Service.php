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

//         function setDescription($new_description)
//         {
//             $this->description = (string) $new_description;
//         }
//         function getDescription()
//         {
//             return $this->description;
//         }
//
//         function setTypeId($new_type_id)
//         {
//             $this->type_id = (string) $new_type_id;
//         }
//         function getTypeId()
//         {
//             return $this->type_id;
//         }
//
//         function setId($new_id)
//         {
//             $this->id = (string) $new_id;
//         }
//         function getId()
//         {
//             return $this->id;
//         }
//
// //Regular Methods
//         function save()
//         {
//           $GLOBALS['DB']->exec("INSERT INTO riders (name) VALUES ('{$this->getName()}');");
//           $this->id = $GLOBALS['DB']->lastInsertId();
//         }
//
// //Static Methods
//         static function getAll()
//         {
//             $returned_riders = $GLOBALS['DB']->query("SELECT * FROM riders;");
//             $riders = array();
//             foreach($returned_riders as $rider) {
//                 $name = $rider['name'];
//                 $id = $rider['id'];
//                 $new_rider = new Rider($name, $id);
//                 array_push($riders, $new_rider);
//             }
//             return $riders;
//         }
//
//
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
