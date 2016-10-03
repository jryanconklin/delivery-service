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
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

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
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

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
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $result = $vendor1->getTypeId();

            //Assert
            $this->assertEquals($type_id, $result);
        }

        function test_getAddressOne()
        {
            //Arrange
            $id = 1;
            $name = "Guardian Games";
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $result = $vendor1->getAddressOne();

            //Assert
            $this->assertEquals($address_one, $result);
        }

        function test_getAddressTwo()
        {
            //Arrange
            $id = 1;
            $name = "Guardian Games";
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $result = $vendor1->getAddressTwo();

            //Assert
            $this->assertEquals($address_two, $result);
        }

        function test_getCity()
        {
            //Arrange
            $id = 1;
            $name = "Guardian Games";
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

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
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

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
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

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
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $result = $vendor1->getCountry();

            //Assert
            $this->assertEquals($country, $result);
        }

        function test_setName()
        {
            //Arrange
            $id = 1;
            $name = "Guardian Games";
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $new_name = "GG Portland";
            $vendor1->setName($new_name);
            $result = $vendor1->getName();

            //Assert
            $this->assertEquals($new_name, $result);
        }

        function test_setTypeId()
        {
            //Arrange
            $id = 1;
            $name = "Guardian Games";
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $new_type_id = 5;
            $vendor1->setTypeId($new_type_id);
            $result = $vendor1->getTypeId();

            //Assert
            $this->assertEquals($new_type_id, $result);
        }

        function test_setAddressOne()
        {
            //Arrange
            $id = 1;
            $name = "Guardian Games";
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $new_address_one = "New Place Ave";
            $vendor1->setAddressOne($new_address_one);
            $result = $vendor1->getAddressOne();

            //Assert
            $this->assertEquals($new_address_one, $result);
        }

        function test_setAddressTwo()
        {
            //Arrange
            $id = 1;
            $name = "Guardian Games";
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $new_address_two = "New Place Ave";
            $vendor1->setAddressTwo($new_address_two);
            $result = $vendor1->getAddressTwo();

            //Assert
            $this->assertEquals($new_address_two, $result);
        }

        function test_setCity()
        {
            //Arrange
            $id = 1;
            $name = "Guardian Games";
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $new_city = "New City";
            $vendor1->setCity($new_city);
            $result = $vendor1->getCity();

            //Assert
            $this->assertEquals($new_city, $result);
        }

        function test_setState()
        {
            //Arrange
            $id = 1;
            $name = "Guardian Games";
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = "97214";
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $new_state = "WA";
            $vendor1->setState($new_state);
            $result = $vendor1->getState();

            //Assert
            $this->assertEquals($new_state, $result);
        }

        function test_setZip()
        {
            //Arrange
            $id = 1;
            $name = "Guardian Games";
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = 97214;
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $new_zip = 98773;
            $vendor1->setZip($new_zip);
            $result = $vendor1->getZip();

            //Assert
            $this->assertEquals($new_zip, $result);
        }

        function test_setCountry()
        {
            //Arrange
            $id = 1;
            $name = "Guardian Games";
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = 97214;
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $new_country = "Canada";
            $vendor1->setCountry($new_country);
            $result = $vendor1->getCountry();

            //Assert
            $this->assertEquals($new_country, $result);
        }

        function test_save()
        {
            //Arrange
            $id = null;
            $name = "Guardian Games";
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = 97214;
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);

            //Act
            $vendor1->save();
            $result = Vendor::getAll();

            //Assert
            $this->assertEquals([$vendor1], $result);
        }

        function test_getAll()
        {
            //Arrange
            $id = null;
            $name = "Guardian Games";
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = 97214;
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);
            $vendor1->save();

            $id2 = null;
            $name2 = "Portland Game Store";
            $type_id2 = 2;
            $address_one2 = "345 N Killingsworth St";
            $address_two2 = "";
            $city2 = "Portland";
            $state2 = "OR";
            $zip2 = 97217;
            $country2 = "United States";
            $vendor2 = new Vendor($name2, $type_id2, $address_one2, $address_two2, $city2, $state2, $zip2, $country2, $id2);
            $vendor2->save();

            //Act
            $result = Vendor::getAll();

            //Assert
            $this->assertEquals([$vendor1, $vendor2], $result);
        }

        function test_delete()
        {
            //Arrange
            $id = null;
            $name = "Guardian Games";
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = 97214;
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);
            $vendor1->save();

            $id2 = null;
            $name2 = "Portland Game Store";
            $type_id2 = 2;
            $address_one2 = "345 N Killingsworth St";
            $address_two2 = "";
            $city2 = "Portland";
            $state2 = "OR";
            $zip2 = 97217;
            $country2 = "United States";
            $vendor2 = new Vendor($name2, $type_id2, $address_one2, $address_two2, $city2, $state2, $zip2, $country2, $id2);
            $vendor2->save();

            //Act
            $vendor1->delete();
            $result = Vendor::getAll();

            //Assert
            $this->assertEquals([$vendor2], $result);
        }

        function test_findById()
        {
            //Arrange
            $id = null;
            $name = "Guardian Games";
            $type_id = 2;
            $address_one = "345 SE Taylor St";
            $address_two = "";
            $city = "Portland";
            $state = "OR";
            $zip = 97214;
            $country = "United States";
            $vendor1 = new Vendor($name, $type_id, $address_one, $address_two, $city, $state, $zip, $country, $id);
            $vendor1->save();

            $id2 = null;
            $name2 = "Portland Game Store";
            $type_id2 = 2;
            $address_one2 = "345 N Killingsworth St";
            $address_two2 = "";
            $city2 = "Portland";
            $state2 = "OR";
            $zip2 = 97217;
            $country2 = "United States";
            $vendor2 = new Vendor($name2, $type_id2, $address_one2, $address_two2, $city2, $state2, $zip2, $country2, $id2);
            $vendor2->save();

            //Act
            $search_id = $vendor2->getId();
            $result = Vendor::findById($search_id);

            //Assert
            $this->assertEquals($vendor2, $result);
        }
















//End Test
    }
?>
