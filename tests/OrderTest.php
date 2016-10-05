<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__."/../inc/ConnectionTest.php";
    require_once __DIR__."/../src/Order.php";
    require_once __DIR__."/../src/Rider.php";
    require_once __DIR__."/../src/Service.php";

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

        function test_delete()
        {
            //Arrange
            $client_id = 1;
            $rider_id = 10;
            $address_id = 18;
            $instructions = "this better work";
            $details = "This is a Killer Burger Order.";
            $test_order = new Order ($client_id, $rider_id, $address_id, $instructions, $details);
            $test_order->save();

            //Act
            $test_order->delete();
            $result = Order::getAll();

            //Assert
            $this->assertEquals([], $result);
        }


        function test_updateStatus()
        {
            //Arrange
            $client_id = 1;
            $rider_id = 10;
            $address_id = 18;
            $instructions = "this better work";
            $details = "This is a Killer Burger Order.";
            $test_order = new Order ($client_id, $rider_id, $address_id, $instructions, $details);
            $test_order->save();

            //Act
            $new_status = 1;
            $test_order->updateStatus($new_status);
            $result = $test_order->getStatus();

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_updateDetails()
        {
            //Arrange
            $client_id = 1;
            $rider_id = 10;
            $address_id = 18;
            $instructions = "this better work";
            $details = "This is a Killer Burger Order.";
            $test_order = new Order ($client_id, $rider_id, $address_id, $instructions, $details);
            $test_order->save();

            //Act
            $new_details = "This is a Burger Killing Order.";
            $test_order->updateDetails($new_details);
            $result = $test_order->getDetails();

            //Assert
            $this->assertEquals($new_details, $result);
        }

        function test_updateRider()
        {
            //Arrange
            $client_id = 1;
            $rider_id = 10;
            $address_id = 18;
            $instructions = "this better work";
            $details = "This is a Killer Burger Order.";
            $test_order = new Order ($client_id, $rider_id, $address_id, $instructions, $details);
            $test_order->save();

            //Act
            $new_rider_id = 11;
            $test_order->updateRider($new_rider_id);
            $result = $test_order->getRiderId();

            //Assert
            $this->assertEquals($new_rider_id, $result);
        }

        function test_assignRiderVendor()
        {
            //Arrange
            $name = "Tom Hanks";
            $phone = "888-888-8888";
            $location = "Couch ave. and NW 5th ave.";
            $available = 1;
            $id = 1;
            $test_rider = new Rider($name, $phone, $location, $available, $id);
            $test_rider->save();

            $client_id = 1;
            $rider_id = 0;
            $address_id = 18;
            $instructions = "this better work";
            $details = "This is a Killer Burger Order.";
            $status = 0;
            $service_id = 1;
            $vendor_id = 0;
            $test_order = new Order ($client_id, $rider_id, $address_id, $instructions, $details, $status, $service_id, $vendor_id);
            $test_order->save();

            //Act
            $test_order->assignRider();
            $result = $test_order->getRiderId();

            //Assert
            $this->assertEquals($test_rider->getId(), $result);
        }

        // function test_assignRiderService()
        // {
        //     //Arrange
        //     $name = "Tom Hanks";
        //     $phone = "888-888-8888";
        //     $location = "Couch ave. and NW 5th ave.";
        //     $available = 1;
        //     $id = 1;
        //     $test_rider = new Rider($name, $phone, $location, $available, $id);
        //     $test_rider->save();
        //
        //     $name = "Moving help";
        //     $description = "We send a capable pair of hands your way to do some packing and lugging!";
        //     $url = "service.com";
        //     $type_id = 1;
        //     $test_service = new Service($name, $description, $type_id, $url);
        //     $test_service->save();
        //
        //     $test_rider->addService($test_service);
        //
        //     $client_id = 1;
        //     $rider_id = 10;
        //     $address_id = 18;
        //     $instructions = "this better work";
        //     $details = "This is a Killer Burger Order.";
        //     $status = 0;
        //     $service_id = 0;
        //     $vendor_id = 1;
        //     $test_order = new Order ($client_id, $rider_id, $address_id, $instructions, $details, $status, $service_id, $vendor_id);
        //     $test_order->save();
        //
        //     //Act
        //     $test_order->assignRider();
        //     $result =
        // }

//End Test
    }
?>
