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
            // Service::deleteAll();
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

        function test_save()
        {
          //Arrange
          $name = "Tom Hanks";
          $test_rider = new Service($name);
          //Act
          $test_rider->save();
          $result = Service::getAll();
          //Assert
          $this->assertEquals([$test_rider], $result);
        }
    
    //     function test_getAll()
    //     {
    //       //Arrange
    //       $name = "Tom Hanks";
    //       $test_rider = new Service($name);
    //       $test_rider->save();
    //
    //       $name2 = "Meg Ryan";
    //       $test_rider2 = new Service($name2);
    //       $test_rider2->save();
    //
    //       //Act
    //       $result = Service::getAll();
    //
    //       //Assert
    //       $this->assertEquals([$test_rider, $test_rider2], $result);
    //     }
    //
    //     function test_deleteAll()
    //     {
    //       //Arrange
    //       $name = "Tom Hanks";
    //       $test_rider = new Service($name);
    //       $test_rider->save();
    //
    //       $name2 = "Meg Ryan";
    //       $test_rider2 = new Service($name2);
    //       $test_rider2->save();
    //
    //       //Act
    //       Service::deleteAll();
    //       $result = Service::getAll();
    //
    //
    //       //Assert
    //       $this->assertEquals([], $result);
    //     }
    //
    //     function test_riderFind()
    //     {
    //         //Arrange
    //         $name = "Tom Hanks";
    //         $test_rider = new Service($name);
    //         $test_rider->save();
    //
    //         $name2 = "Meg Ryan";
    //         $test_rider2 = new Service($name2);
    //         $test_rider2->save();
    //
    //         //Act
    //         $id = $test_rider->getId();
    //         $result = Service::find($id);
    //
    //         //Assert
    //         $this->assertEquals($test_rider, $result);
    //     }
    }
?>
