<?php

    class Order
    {
//Properties
        private $client_id;
        private $service_id;
        private $vendor_id;
        private $rider_id;
        private $address_id;
        private $status;
        private $instructions;
        private $details;
        private $id;

//Constructor
        function __construct($client_id, $rider_id, $address_id, $instructions, $details, $status = 0,  $service_id = 0, $vendor_id = 0, $id = 0)
        {
            $this->client_id = $client_id;
            $this->rider_id = $rider_id;
            $this->address_id = $address_id;
            $this->instructions = $instructions;
            $this->details = $details;
            $this->status = $status;
            $this->service_id = $service_id;
            $this->vendor_id = $vendor_id;
            $this->id = $id;
        }

//Getter and Setter Methods

        function setClientId($new_client_id)
        {
            $this->client_id = $new_client_id;
        }
        function getClientId()
        {
            return $this->client_id;
        }

        function setRiderId($new_rider_id)
        {
            $this->rider_id = $new_rider_id;
        }
        function getRiderId()
        {
            return $this->rider_id;
        }

        function setAddressId($new_address_id)
        {
            $this->address_id = $new_address_id;
        }
        function getAddressId()
        {
            return $this->address_id;
        }

        function setStatus($new_status)
        {
            $this->status = $new_status;
        }
        function getStatus()
        {
            return $this->status;
        }

        function setDetails($new_details)
        {
            $this->details = (string) $new_details;
        }
        function getDetails()
        {
            return $this->details;
        }

        function setInstructions($new_instructions)
        {
            $this->instructions = (string) $new_instructions;
        }
        function getInstructions()
        {
            return $this->instructions;
        }

        function setServiceId($new_service_id)
        {
            $this->service_id = $new_service_id;
        }
        function getServiceId()
        {
            return $this->service_id;
        }

        function setVendorId($new_vendor_id)

        {
            $this->vendor_id = $new_vendor_id;
        }

        function getVendorId()
        {
            return $this->vendor_id;
        }

        function setId($new_id)
        {
            $this->id = $new_id;
        }

        function getId()
        {
            return $this->id;
        }


//Regular Methods
        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO orders (status, details, instructions, client_id, service_id, vendor_id, rider_id, address_id)
            VALUES (
                '{$this->getStatus()}',
                '{$this->getDetails()}',
                '{$this->getInstructions()}',
                {$this->getClientId()},
                {$this->getServiceId()},
                {$this->getVendorId()},
                {$this->getRiderId()},
                {$this->getAddressId()}
                );"
            );
            $this->id = $GLOBALS['DB']->lastInsertId();
        }


//Static Methods
        static function getAll()
        {
            $returned_orders = $GLOBALS['DB']->query("SELECT * FROM orders;");
            $orders = array();
            foreach($returned_orders as $order) {
                $client_id = $order['client_id'];
                $rider_id = $order['rider_id'];
                $address_id = $order['address_id'];
                $instructions = $order['instructions'];
                $details = $order['details'];
                $status = $order['status'];
                $service_id = $order['service_id'];
                $vendor_id = $order['vendor_id'];
                $id = $order['id'];
                $new_order = new Order($client_id, $rider_id, $address_id, $instructions, $details, $status,  $service_id, $vendor_id, $id);
                array_push($orders, $new_order);
            }
            return $orders;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM orders;");
        }

        static function find($search_id)
        {
            $found_order = null;
            $orders = Order::getAll();
            foreach ($orders as $order) {
                $order_id = $order->getId();
                if($order_id == $search_id) {
                    $found_order = $order;
                }
            }
            return $found_order;
        }

//End Class
    }
?>
