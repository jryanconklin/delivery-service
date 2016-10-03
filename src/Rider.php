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
//End Class
    }
?>
