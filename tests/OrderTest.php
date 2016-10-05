<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__."/../inc/ConnectionTest.php";
    require_once __DIR__."/../src/Order.php";

    class OrderTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Order::deleteAll();

        }

        function test_getClientId()
        {
            //Arrange
            $client_id = 1;
            $rider_id = 10;
            $address_id = 18;
            $instructions = "this better work";
            $details = "This is a Killer Burger Order.";
            $test_order = new Order ($client_id, $rider_id, $address_id, $instructions, $details);

            //Act
            $result = $test_order->getClientId();

            //Assert
            $this->assertEquals(1, $result);

        }

        function test_setStatus()
        {
            //Arrange
            $client_id = 1;
            $rider_id = 10;
            $address_id = 18;
            $instructions = "this better work";
            $details = "This is a Killer Burger Order.";
            $test_order = new Order ($client_id, $rider_id, $address_id, $instructions, $details);

            //Act
            $new_status = 1;
            $test_order->setStatus($new_status);
            $result = $test_order->getStatus();


            //Assert
            $this->assertEquals($new_status, $result);
        }

        function test_save()
        {
            //Arrange
            $client_id = 1;
            $rider_id = 10;
            $address_id = 18;
            $instructions = "this better work";
            $details = "This is a Killer Burger Order.";
            $test_order = new Order ($client_id, $rider_id, $address_id, $instructions, $details);


            //Act
            $test_order->save();
            $result = Order::getAll();


            //Assert
            $this->assertEquals([$test_order], $result);
        }

        function test_getAll()
        {
            //Arrange
            $client_id = 1;
            $rider_id = 10;
            $address_id = 18;
            $instructions = "this better work";
            $details = "This is a Killer Burger Order.";
            $test_order = new Order ($client_id, $rider_id, $address_id, $instructions, $details);
            $test_order->save();

            $client_id2 = 2;
            $rider_id2 = 11;
            $address_id2 = 18;
            $instructions2 = "this also better work";
            $details2 = "This is a person-killer Order.";
            $test_order2 = new Order ($client_id2, $rider_id2, $address_id2, $instructions2, $details2);
            $test_order2->save();

            //Act
            $result = Order::getAll();

            //Assert
            $this->assertEquals([$test_order, $test_order2], $result);
        }


        function test_find()
        {
            //Arrange
            $client_id = 1;
            $rider_id = 10;
            $address_id = 18;
            $instructions = "this better work";
            $details = "This is a Killer Burger Order.";
            $test_order = new Order ($client_id, $rider_id, $address_id, $instructions, $details);
            $test_order->save();

            $client_id2 = 2;
            $rider_id2 = 11;
            $address_id2 = 18;
            $instructions2 = "this also better work";
            $details2 = "This is a person-killer Order.";
            $test_order2 = new Order ($client_id2, $rider_id2, $address_id2, $instructions2, $details2);
            $test_order2->save();

            //Act
            $search_id = $test_order->getId();
            $result = Order::find($search_id);

            //Assert
            $this->assertEquals($test_order, $result);
        }

//End Test
    }
?>
