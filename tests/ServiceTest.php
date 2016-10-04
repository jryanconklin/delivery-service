<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__."/../inc/ConnectionTest.php";
    require_once __DIR__."/../src/Address.php";
    require_once __DIR__."/../src/Rider.php";
    require_once __DIR__."/../src/Service.php";
    require_once __DIR__."/../src/Vendor.php";

    class ServiceTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Address::deleteAll();
            Rider::deleteAll();
            Service::deleteAll();
            Vendor::deleteAll();
        }

        function test_getServiceName()
        {
            //Arrange
            $name = "Moving help";
            $description = "We'll send a capable pair of hands your way to do some packing and lugging!";
            $type_id = 1;
            $url = "service.com";
            $id = 1;
            $test_service = new Service($name, $description, $type_id, $url, $id);

            //Act
            $result = $test_service->getName();

            //Assert
            $this->assertEquals($name, $result);
        }

        function test_setServiceName()
        {
            //Arrange
            $name = "Moving help";
            $description = "Well send a capable pair of hands your way to do some packing and lugging!";
            $type_id = 1;
            $url = "service.com";
            $id = 1;
            $test_service = new Service($name, $description, $type_id, $id, $url);

            //Act
            $new_name = "Heavy lifting";
            $test_service->setName($new_name);
            $result = $test_service->getName();

            //Assert
            $this->assertEquals($new_name, $result);
        }

        function test_serviceSave()
        {
            // Arrange
            $name = "Moving help";
            $description = "test test";
            $type_id = 1;
            $url = "service.com";
            $test_service = new Service($name, $description, $type_id, $url);
            $test_service->save();

            //Act
            $result = Service::getAll();
            //Assert
            $this->assertEquals([$test_service], $result);
        }

        function test_getAll()
        {
            //Arrange
            $name = "Moving help";
            $description = "test test";
            $type_id = 1;
            $url = "service.com";
            $test_service = new Service($name, $description, $type_id, $url);
            $test_service->save();

            $name2 = "Math Tutoring";
            $description2 = "test test";
            $type_id2 = 2;
            $url2 = "service.com";
            $test_service2 = new Service($name2, $description2, $type_id2, $url2);
            $test_service2->save();

            //Act
            $result = Service::getAll();

            //Assert
            $this->assertEquals([$test_service, $test_service2], $result);
        }


        function test_deleteAll()
        {
            //Arrange
            $name = "Moving help";
            $description = "test test";
            $url = "service.com";
            $type_id = 1;
            $test_service = new Service($name, $description, $type_id, $url);
            $test_service->save();

            $name2 = "Math Tutoring";
            $description2 = "test test";
            $url2 = "service.com";
            $type_id2 = 2;
            $test_service2 = new Service($name2, $description2, $type_id2, $url);
            $test_service2->save();

            //Act
            Service::deleteAll();
            $result = Service::getAll();

            //Assert
            $this->assertEquals([], $result);
        }

        function test_serviceFind()
        {
            //Arrange
            $name = "Moving help";
            $description = "test test";
            $url = "service.com";
            $type_id = 1;
            $test_service = new Service($name, $description, $type_id, $url);
            $test_service->save();

            $name2 = "Math Tutoring";
            $description2 = "test test";
            $url2 = "service.com";
            $type_id2 = 2;
            $test_service2 = new Service($name2, $description2, $type_id2, $url);
            $test_service2->save();

            //Act
            $id = $test_service->getId();
            $result = Service::find($id);

            //Assert
            $this->assertEquals($test_service, $result);
        }

        function test_addRider()
        {
            //Arrange
            $name = "Moving help";
            $description = "We send a capable pair of hands your way to do some packing and lugging!";
            $url = "service.com";
            $type_id = 1;
            $test_service = new Service($name, $description, $type_id, $url);
            $test_service->save();

            $name = "Tom Hanks";
            $phone = "888-888-8888";
            $location = "Couch ave. and NW 5th ave.";
            $available = 1;
            $test_rider = new Rider($name, $phone, $location, $available);
            $test_rider->save();


            $name2 = "Meg Ryan";
            $phone2 = "999-999-9999";
            $location2 = "Couch ave. and NW 6th ave.";
            $available2 = 1;
            $test_rider2 = new Rider($name2, $phone2, $location2, $available2);
            $test_rider2->save();


            //Act
            $test_service->addRider($test_rider);
            $result = $test_service->getRiders();

            //Assert
            $this->assertEquals([$test_rider], $result);
        }

        function test_getRiders()
        {
            //Arrange
            $name = "Moving help";
            $description = "We send a capable pair of hands your way to do some packing and lugging!";
            $url = "service.com";
            $type_id = 1;
            $test_service = new Service($name, $description, $type_id, $url);
            $test_service->save();

            $name = "Tom Hanks";
            $phone = "888-888-8888";
            $location = "Couch ave. and NW 5th ave.";
            $available = 1;
            $test_rider = new Rider($name, $phone, $location, $available);
            $test_rider->save();


            $name2 = "Meg Ryan";
            $phone2 = "999-999-9999";
            $location2 = "Couch ave. and NW 6th ave.";
            $available2 = 1;
            $test_rider2 = new Rider($name2, $phone2, $location2, $available2);
            $test_rider2->save();

            //Act
            $test_service->addRider($test_rider);
            $test_service->addRider($test_rider2);
            $result = $test_service->getRiders();

            //Assert
            $this->assertEquals([$test_rider, $test_rider2], $result);
        }

//End Test
    }
?>
