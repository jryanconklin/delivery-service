<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__."/../inc/ConnectionTest.php";
    require_once __DIR__."/../src/Vendor.php";
    // require_once __DIR__."/../src/SecondClass.php";

    class VendorTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Vendor::deleteAll();
            // SecondClass::deleteAll();
        }

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
            $this->assertEquals($id, $result);
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

        function test_getTypeId()
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
            $result = $vendor1->getTypeId();

            //Assert
            $this->assertEquals($typeId, $result);
        }

        function test_getAddressOne()
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
            $result = $vendor1->getAddressOne();

            //Assert
            $this->assertEquals($addressOne, $result);
        }

        function test_getAddressTwo()
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
            $result = $vendor1->getAddressTwo();

            //Assert
            $this->assertEquals($addressTwo, $result);
        }

        function test_getCity()
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
            $result = $vendor1->getCity();

            //Assert
            $this->assertEquals($city, $result);
        }

        function test_getState()
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
            $result = $vendor1->getState();

            //Assert
            $this->assertEquals($state, $result);
        }

        function test_getZip()
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
            $result = $vendor1->getZip();

            //Assert
            $this->assertEquals($zip, $result);
        }

        function test_getCountry()
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
            $result = $vendor1->getCountry();

            //Assert
            $this->assertEquals($country, $result);
        }





//End Test
    }
?>
