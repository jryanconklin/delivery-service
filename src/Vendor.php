<?php

    class Vendor
    {
//Properties
        private $id;
        private $name;
        private $description;
        private $phone;
        private $url;
        private $photo;
        private $type_id;
        private $address_id;

//Constructor
        function __construct($name, $description, $phone, $url, $photo, $type_id, $address_id, $id = null)
        {
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
            $this->phone = $phone;
            $this->url = $url;
            $this->photo = $photo;
            $this->type_id = $type_id;
            $this->address_id = $address_id;
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

        function getDescription()
        {
            return $this->description;
        }

        function getPhone()
        {
            return $this->phone;
        }

        function getUrl()
        {
            return $this->url;
        }

        function getPhoto()
        {
            return $this->photo;
        }

        function getTypeId()
        {
            return $this->type_id;
        }

        function getAddressId()
        {
            return $this->address_id;
        }

        //Setters
        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function setDescription($new_description)
        {
            $this->description = (string) $new_description;
        }

        function setPhone($new_phone)
        {
            $this->phone = (string) $new_phone;
        }

        function setUrl($new_url)
        {
            $this->url = (string) $new_url;
        }

        function setPhoto($new_photo)
        {
            $this->photo = (string) $new_photo;
        }

        function setTypeId($new_type_id)
        {
            $this->type_id = (integer) $new_type_id;
        }

        function setAddressId($new_address_id)
        {
            $this->address_id = (string) $new_address_id;
        }


//Regular Methods
        function save()
        {
            $GLOBALS['DB']->exec(
            "INSERT INTO vendors (name, description, phone, url, photo, type_id, address_id)
            VALUES (
                '{$this->getName()}',
                '{$this->getDescription()}',
                '{$this->getPhone()}',
                '{$this->getUrl()}',
                '{$this->getPhoto()}',
                {$this->getTypeId()},
                {$this->getAddressId()}
                );"
            );
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        // function update($new_name, $new_type, $new_address_one, $new_address_two, $new_city, $new_state, $new_zip, $new_country)
        // {
        //
        // }

        function delete()
        {
            $GLOBALS['DB']->exec("DELETE FROM vendors WHERE id = {$this->getId()};");
        }



//Static Methods
        static function getAll()
        {
            $all_vendors = array();
            $returned_vendors = $GLOBALS['DB']->query("SELECT * FROM vendors;");

            foreach($returned_vendors as $vendor) {
                $id = $vendor['id'];
                $name = $vendor['name'];
                $description = $vendor['description'];
                $phone = $vendor['phone'];
                $url = $vendor['url'];
                $photo = $vendor['photo'];
                $type_id = $vendor['type_id'];
                $address_id = $vendor['address_id'];

                $new_vendor = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);

                array_push($all_vendors, $new_vendor);
            }
            return $all_vendors;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM vendors;");
        }

        static function findById($search_id)
        {
            $vendors = $GLOBALS['DB']->query("SELECT * FROM vendors WHERE id = {$search_id};");
            foreach ($vendors as $vendor) {
                $id = $vendor['id'];
                $name = $vendor['name'];
                $description = $vendor['description'];
                $phone = $vendor['phone'];
                $url = $vendor['url'];
                $photo = $vendor['photo'];
                $type_id = $vendor['type_id'];
                $address_id = $vendor['address_id'];

                $found_vendor = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
                return $found_vendor;
            }
        }

        static function findByName($search_name)
        {
            $vendors = $GLOBALS['DB']->query("SELECT * FROM vendors WHERE name = '{$search_name}';");
            foreach ($vendors as $vendor) {
                $id = $vendor['id'];
                $name = $vendor['name'];
                $description = $vendor['description'];
                $phone = $vendor['phone'];
                $url = $vendor['url'];
                $photo = $vendor['photo'];
                $type_id = $vendor['type_id'];
                $address_id = $vendor['address_id'];

                $found_vendor = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
                return $found_vendor;
            }
        }


//End Class
    }
?>
