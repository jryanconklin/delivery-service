<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__."/../inc/ConnectionTest.php";
    require_once __DIR__."/../src/Rider.php";
    require_once __DIR__."/../src/Service.php";


    class ServiceTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Service::deleteAll();
            // Rider::deleteAll();
        }
        function test_getServiceName()
        {
            //Arrange
            $name = "Moving help";
            $description = "We'll send a capable pair of hands your way to do some packing and lugging!";
            $type_id = 1;
            $id = 1;
            $test_service = new Service($name, $description, $type_id, $id);

            //Act
            $result = $test_service->getName();

            //Assert
            $this->assertEquals($name, $result);
        }

        function test_setServiceName()
        {
            //Arrange
            $name = "Moving help";
            $description = "We'll send a capable pair of hands your way to do some packing and lugging!";
            $type_id = 1;
            $id = 1;
            $test_service = new Service($name, $description, $type_id, $id);

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
          $test_service = new Service($name, $description, $type_id);
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
          $test_service = new Service($name, $description, $type_id);
          $test_service->save();

          $name2 = "Math Tutoring";
          $description2 = "test test";
          $type_id2 = 2;
          $test_service2 = new Service($name2, $description2, $type_id2);
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
          $type_id = 1;
          $test_service = new Service($name, $description, $type_id);
          $test_service->save();

          $name2 = "Math Tutoring";
          $description2 = "test test";
          $type_id2 = 2;
          $test_service2 = new Service($name2, $description2, $type_id2);
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
            $type_id = 1;
            $test_service = new Service($name, $description, $type_id);
            $test_service->save();

            $name2 = "Math Tutoring";
            $description2 = "test test";
            $type_id2 = 2;
            $test_service2 = new Service($name2, $description2, $type_id2);
            $test_service2->save();

            //Act
            $id = $test_service->getId();
            $result = Service::find($id);

            //Assert
            $this->assertEquals($test_service, $result);
        }
    }
?>
