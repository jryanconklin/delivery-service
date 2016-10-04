<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__."/../inc/ConnectionTest.php";
    require_once __DIR__."/../src/Address.php";

    class AddressTest extends PHPUnit_Framework_TestCase
    {
        // protected function tearDown()
        // {
        //     Address::deleteAll();
        // }

        function test_getId()
        {
            //Arrange
            $id = 1;
            $address_type = "Residential";
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $address1 = new Address($address_type, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $result = $address1->getId();

            //Assert
            $this->assertEquals($id, $result);
        }

        function test_getAddressType()
        {
            //Arrange
            $id = 1;
            $address_type = "Residential";
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $address1 = new Address($address_type, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $result = $address1->getAddressType();

            //Assert
            $this->assertEquals($address_type, $result);
        }

        function test_getAddressOne()
        {
            //Arrange
            $id = 1;
            $address_type = "Residential";
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $address1 = new Address($address_type, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $result = $address1->getAddressOne();

            //Assert
            $this->assertEquals($address_one, $result);
        }

        function test_getAddressTwo()
        {
            //Arrange
            $id = 1;
            $address_type = "Residential";
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $address1 = new Address($address_type, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $result = $address1->getAddressTwo();

            //Assert
            $this->assertEquals($address_two, $result);
        }

        function test_getCity()
        {
            //Arrange
            $id = 1;
            $address_type = "Residential";
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $address1 = new Address($address_type, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $result = $address1->getCity();

            //Assert
            $this->assertEquals($city, $result);
        }

        function test_getState()
        {
            //Arrange
            $id = 1;
            $address_type = "Residential";
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $address1 = new Address($address_type, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $result = $address1->getState();

            //Assert
            $this->assertEquals($state, $result);
        }

        function test_getZip()
        {
            //Arrange
            $id = 1;
            $address_type = "Residential";
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $address1 = new Address($address_type, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $result = $address1->getZip();

            //Assert
            $this->assertEquals($zip, $result);
        }

        function test_getCountry()
        {
            //Arrange
            $id = 1;
            $address_type = "Residential";
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $address1 = new Address($address_type, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $result = $address1->getCountry();

            //Assert
            $this->assertEquals($country, $result);
        }



//End Test
    }
?>
