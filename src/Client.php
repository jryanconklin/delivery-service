<?php

    class Client
    {
//Properties
        private $email;
        private $name;
        private $password;
        private $phone;
        private $address_id;
        private $id;


//Constructor
        function __construct($email, $name, $password, $phone, $address_id, $id = null)
        {
            $this->email = $email;
            $this->name = $name;
            $this->password = $password;
            $this->phone = $phone;
            $this->address_id = $address_id;
            $this->id = $id;
        }



//Getter and Setter Methods
        function setEmail($new_email)
        {
            $this->email = $new_email;
        }

        function getEmail()
        {
            return $this->email;
        }

        function setName($new_name)
        {
            $this->name = $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setPassword($new_password)
        {
            $this->password = $new_password;
        }
        function getPassword()
        {
            return $this->password;
        }

        function setPhone($new_phone)
        {
            $this->phone = $new_phone;
        }

        function getPhone()
        {
            return $this->phone;
        }


        function getAddressId()
        {
            return $this->address_id;
        }

        function getId()
        {
            return $this->id;
        }
//Regular Methods
        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO clients (email, name, password, phone, address_id) VALUES ('{$this->getEmail()}', '{$this->getName()}', '{$this->getPassword()}', '{$this->getPhone()}', {$this->getAddressId()});");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

//Static Methods
        static function getAll()
        {
            $returned_clients = $GLOBALS['DB']->query("SELECT * FROM clients;");
            $clients = array();
            foreach($returned_clients as $client) {
                $email = $client['email'];
                $name = $client['name'];
                $password = $client['password'];
                $phone = $client['phone'];
                $address_id = $client['address_id'];
                $id = $client['id'];
                $new_client = new Client($email, $name, $password, $phone, $address_id, $id);
                array_push($clients, $new_client);
            }
            return $clients;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM clients;");
        }

        static function find($search_id)
        {
            $found_client = null;
            $clients = Client::getAll();
            foreach($clients as $client){
                $client_id = $client->getId();
                if($client_id == $search_id) {
                    $found_client = $client;
                }
            }
            return $found_client;
        }

        function updateName($new_name)
        {
            $GLOBALS['DB']->exec("UPDATE clients name = {$new_name} WHERE id = {$this->getId()};");
            $this->setName($new_name);
        }

        function updateEmail($new_email)
        {
            $GLOBALS['DB']->exec("UPDATE clients email = {$new_email} WHERE id = {$this->getId()};");
            $this->setEmail($new_email);
        }

        function updatePassword($new_password)
        {
            $GLOBALS['DB']->exec("UPDATE clients password = {$new_password} WHERE id = {$this->getId()};");
            $this->setPassword($new_password);
        }

        function updatePhone($new_phone)
        {
            $GLOBALS['DB']->exec("UPDATE clients phone = {$new_phone} WHERE id = {$this->getId()};");
            $this->setPhone($new_phone);
        }
//End Class
    }
?>
