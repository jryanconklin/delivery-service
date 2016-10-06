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

    class AddressTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Address::deleteAll();
            Rider::deleteAll();
            Service::deleteAll();
            Vendor::deleteAll();
        }

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

        function test_setAddressType()
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
            $new_address_type = "Business";
            $address1->setAddressType($new_address_type);
            $result = $address1->getAddressType();

            //Assert
            $this->assertEquals($new_address_type, $result);
        }

        function test_setAddressOne()
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
            $new_address_one = "New Place Ave";
            $address1->setAddressOne($new_address_one);
            $result = $address1->getAddressOne();

            //Assert
            $this->assertEquals($new_address_one, $result);
        }

        function test_setAddressTwo()
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
            $new_address_two = "New Place Ave";
            $address1->setAddressTwo($new_address_two);
            $result = $address1->getAddressTwo();

            //Assert
            $this->assertEquals($new_address_two, $result);
        }

        function test_setCity()
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
            $new_city = "New City";
            $address1->setCity($new_city);
            $result = $address1->getCity();

            //Assert
            $this->assertEquals($new_city, $result);
        }

        function test_setState()
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
            $new_state = "WA";
            $address1->setState($new_state);
            $result = $address1->getState();

            //Assert
            $this->assertEquals($new_state, $result);
        }

        function test_setZip()
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
            $new_zip = 98773;
            $address1->setZip($new_zip);
            $result = $address1->getZip();

            //Assert
            $this->assertEquals($new_zip, $result);
        }

        function test_setCountry()
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
            $new_country = "Canada";
            $address1->setCountry($new_country);
            $result = $address1->getCountry();

            //Assert
            $this->assertEquals($new_country, $result);
        }

        function test_save()
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
            $address1->save();
            $result = Address::getAll();

            //Assert
            $this->assertEquals([$address1], $result);
        }

        function test_getAll()
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
            $address1->save();

            $id2 = null;
            $address_type2 = "Commercial";
            $address_one2 = "345 N Killingsworth St";
            $address_two2 = "";
            $city2 = "Portland";
            $state2 = "OR";
            $zip2 = 97217;
            $country2 = "United States";
            $address2 = new Address($address_type2, $address_one2, $address_two2, $city2, $state2, $zip2, $country2, $id2);
            $address2->save();

            //Act
            $result = Address::getAll();

            //Assert
            $this->assertEquals([$address1, $address2], $result);
        }

        function test_update()
        {
            //Arrange
            $id = 1;
            $address_type = "Residentialp1";
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $address1 = new Address($address_type, $address_one, $address_two, $city, $state, $zip, $country, $id);
            $address1->save();

            $id2 = null;
            $address_type2 = "Commercial";
            $address_one2 = "345 N Killingsworth St";
            $address_two2 = "";
            $city2 = "Portland";
            $state2 = "OR";
            $zip2 = 97217;
            $country2 = "United States";

            //Act
            $address1->update($address_type2, $address_one2, $address_two2, $city2, $state2, $zip2, $country2);
            $result = Address::getAll();

            //Assert
            $this->assertEquals([$address1], $result);
        }

        function test_delete()
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
            $address1->save();

            //Act
           $address1->delete();
           $result = Address::getAll();

           //Assert
           $this->assertEquals([], $result);
        }

        function test_findById()
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
            $address1->save();

            //Act
            $search_id = $address1->getId();
            $found_address = Address::findById($search_id);
            $result = Address::getAll();

            //Act
            $this->assertEquals($found_address, $result[0]);
        }




//End Test
    }
?>
