<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    // require_once __DIR__."/../inc/ConnectionTest.php";
    require_once __DIR__."/../src/Vendor.php";
    // require_once __DIR__."/../src/SecondClass.php";

    class VendorTest extends PHPUnit_Framework_TestCase
    {
        // protected function tearDown()
        // {
        //     Vendor::deleteAll();
        //     SecondClass::deleteAll();
        // }

        function test_getId()
        {
            //Arrange
            $id = 1;
            $name = "Guardian Games";
            $typeId = 2;
            $addressOne = "345 SE Taylor St";
            $addressTwo = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $typeId, $addressOne, $addressTwo, $city, $state, $zip, $country, $id);

            //Act
            $result = $vendor1->getId();

            //Assert
            $this->assertEquals(1, $result);
       }

       function test_getName()
       {
           //Arrange
           $id = 1;
           $name = "Guardian Games";
           $typeId = 2;
           $addressOne = "345 SE Taylor St";
           $addressTwo = "";
           $city = "Portland";
           $state = "OR";
           $zip = "97214";
           $country = "United States";
           $vendor1 = new Vendor($name, $typeId, $addressOne, $addressTwo, $city, $state, $zip, $country, $id);

           //Act
           $result = $vendor1->getName();

           //Assert
           $this->assertEquals($name, $result);
      }












//End Test
    }
?>
