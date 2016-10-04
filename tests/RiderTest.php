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

    class RiderTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Address::deleteAll();
            Rider::deleteAll();
            Service::deleteAll();
            Vendor::deleteAll();
        }

        function test_getRiderName()
        {
            //Arrange
            $name = "Tom Hanks";
            $phone = "888-888-8888";
            $location = "Couch ave. and NW 5th ave.";
            $available = 1;
            $id = 1;
            $test_rider = new Rider($name, $phone, $location, $available, $id);

            //Act
            $result = $test_rider->getName();

            //Assert
            $this->assertEquals($name, $result);
        }

        function test_setRiderPhone()
        {
            //Arrange
            $name = "Tom Hanks";
            $phone = "888-888-8888";
            $location = "Couch ave. and NW 5th ave.";
            $available = 1;
            $id = 1;
            $test_rider = new Rider($name, $phone, $location, $available, $id);

            //Act
            $new_phone = "999-999-9999";
            $test_rider->setPhone($new_phone);
            $result = $test_rider->getPhone();


            //Assert
            $this->assertEquals($new_phone, $result);
        }

        function test_save()
        {
            //Arrange
            $name = "Tom Hanks";
            $phone = "888-888-8888";
            $location = "Couch ave. and NW 5th ave.";
            $available = 1;
            $test_rider = new Rider($name, $phone, $location, $available);
            //Act
            $test_rider->save();
            $result = Rider::getAll();
            //Assert
            $this->assertEquals([$test_rider], $result);
        }

        function test_getAll()
        {
            //Arrange
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
            $result = Rider::getAll();

            //Assert
            $this->assertEquals([$test_rider, $test_rider2], $result);
        }

        function test_update()
        {
            //Arrange
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
            $test_rider->update($name2, $phone2, $location2, $available2);
            $result = Rider::getAll();

            //Assert
            $this->assertEquals([$test_rider, $test_rider2], $result);
        }

        function test_deleteAll()
        {
            //Arrange
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
            Rider::deleteAll();
            $result = Rider::getAll();

            //Assert
            $this->assertEquals([], $result);
        }

        function test_riderFind()
        {
            //Arrange
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
            $id = $test_rider->getId();
            $result = Rider::find($id);

            //Assert
            $this->assertEquals($test_rider, $result);
        }

        function test_addService()
        {
            //Arrange
            $name = "Tom Hanks";
            $phone = "888-888-8888";
            $location = "Couch ave. and NW 5th ave.";
            $available = 1;
            $test_rider = new Rider($name, $phone, $location, $available);
            $test_rider->save();

            $name = "Moving help";
            $description = "We send a capable pair of hands your way to do some packing and lugging!";
            $type_id = 1;
            $test_service = new Service($name, $description, $type_id);
            $test_service->save();

            //Act
            $test_rider->addService($test_service);
            $result = $test_rider->getServices();

            //Assert
            $this->assertEquals([$test_service], $result);
        }

        function test_getServices()
        {
            //Arrange
            $name = "Tom Hanks";
            $phone = "888-888-8888";
            $location = "Couch ave. and NW 5th ave.";
            $available = 1;
            $test_rider = new Rider($name, $phone, $location, $available);
            $test_rider->save();

            $name = "Moving help";
            $description = "We send a capable pair of hands your way to do some packing and lugging!";
            $type_id = 1;
            $test_service = new Service($name, $description, $type_id);
            $test_service->save();

            $name2 = "Math Tutoring";
            $description2 = "test test";
            $type_id2 = 2;
            $test_service2 = new Service($name2, $description2, $type_id2);
            $test_service2->save();

            //Act
            $test_rider->addService($test_service);
            $test_rider->addService($test_service2);
            $result = $test_rider->getServices();

            //Assert
            $this->assertEquals([$test_service, $test_service2], $result);
        }

//End Test
    }
?>
