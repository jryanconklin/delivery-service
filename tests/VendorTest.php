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

    class VendorTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Address::deleteAll();
            Rider::deleteAll();
            Service::deleteAll();
            Vendor::deleteAll();
        }

        // function test_getId()
        // {
        //     //Arrange
        //     $id = 1;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $result = $vendor1->getId();
        //
        //     //Assert
        //     $this->assertEquals($id, $result);
        // }
        //
        // function test_getName()
        // {
        //     //Arrange
        //     $id = 1;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $result = $vendor1->getName();
        //
        //     //Assert
        //     $this->assertEquals($name, $result);
        // }
        //
        // function test_getDescription()
        // {
        //     //Arrange
        //     $id = 1;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $result = $vendor1->getDescription();
        //
        //     //Assert
        //     $this->assertEquals($description, $result);
        // }
        //
        // function test_getPhone()
        // {
        //     //Arrange
        //     $id = 1;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $result = $vendor1->getPhone();
        //
        //     //Assert
        //     $this->assertEquals($phone, $result);
        // }
        //
        // function test_getUrl()
        // {
        //     //Arrange
        //     $id = 1;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $result = $vendor1->getUrl();
        //
        //     //Assert
        //     $this->assertEquals($url, $result);
        // }
        //
        // function test_getPhoto()
        // {
        //     //Arrange
        //     $id = 1;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $result = $vendor1->getPhoto();
        //
        //     //Assert
        //     $this->assertEquals($photo, $result);
        // }
        //
        //
        // function test_getTypeId()
        // {
        //     //Arrange
        //     $id = 1;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $result = $vendor1->getTypeId();
        //
        //     //Assert
        //     $this->assertEquals($type_id, $result);
        // }
        //
        // function test_getAddressId()
        // {
        //     //Arrange
        //     $id = 1;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $result = $vendor1->getAddressId();
        //
        //     //Assert
        //     $this->assertEquals($address_id, $result);
        // }
        //
        // function test_setName()
        // {
        //     //Arrange
        //     $id = 1;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $new_name = "GG Portland";
        //     $vendor1->setName($new_name);
        //     $result = $vendor1->getName();
        //
        //     //Assert
        //     $this->assertEquals($new_name, $result);
        // }
        //
        // function test_setDescription()
        // {
        //     //Arrange
        //     $id = 1;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $new_description = "GG Portland";
        //     $vendor1->setDescription($new_description);
        //     $result = $vendor1->getDescription();
        //
        //     //Assert
        //     $this->assertEquals($new_description, $result);
        // }
        //
        // function test_setPhone()
        // {
        //     //Arrange
        //     $id = 1;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $new_phone = "111-111-1111";
        //     $vendor1->setPhone($new_phone);
        //     $result = $vendor1->getPhone();
        //
        //     //Assert
        //     $this->assertEquals($new_phone, $result);
        // }
        //
        // function test_setUrl()
        // {
        //     //Arrange
        //     $id = 1;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $new_url = "https://www.ggportland.com/events";
        //     $vendor1->setUrl($new_url);
        //     $result = $vendor1->getUrl();
        //
        //     //Assert
        //     $this->assertEquals($new_url, $result);
        // }
        //
        // function test_setPhoto()
        // {
        //     //Arrange
        //     $id = 1;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $new_photo = "https://www.ggportland.com/events";
        //     $vendor1->setPhoto($new_photo);
        //     $result = $vendor1->getPhoto();
        //
        //     //Assert
        //     $this->assertEquals($new_photo, $result);
        // }
        //
        // function test_setTypeId()
        // {
        //     //Arrange
        //     $id = 1;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $new_type_id = 5;
        //     $vendor1->setTypeId($new_type_id);
        //     $result = $vendor1->getTypeId();
        //
        //     //Assert
        //     $this->assertEquals($new_type_id, $result);
        // }
        //
        // function test_setAddressId()
        // {
        //     //Arrange
        //     $id = 1;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $new_address_id = 5;
        //     $vendor1->setAddressId($new_address_id);
        //     $result = $vendor1->getAddressId();
        //
        //     //Assert
        //     $this->assertEquals($new_address_id, $result);
        // }
        //
        // function test_save()
        // {
        //     //Arrange
        //     $id = null;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //
        //     //Act
        //     $vendor1->save();
        //     $result = Vendor::getAll();
        //
        //     //Assert
        //     $this->assertEquals([$vendor1], $result);
        // }
        //
        // function test_getAll()
        // {
        //     //Arrange
        //     $id = null;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //     $vendor1->save();
        //
        //     $id2 = null;
        //     $name2 = "Portland Game Store";
        //     $description2 = "Awesome good timez!";
        //     $phone2 = "999-999-9999";
        //     $url2 = "http://www.theportlandgamestore.com/";
        //     $photo2 = "/img/pdxgamestore.jpg";
        //     $type_id2 = 2;
        //     $address_id2 = 37;
        //     $vendor2 = new Vendor($name2, $description2, $phone2, $url2, $photo2, $type_id2, $address_id2, $id2);
        //     $vendor2->save();
        //
        //     //Act
        //     $result = Vendor::getAll();
        //
        //     //Assert
        //     $this->assertEquals([$vendor1, $vendor2], $result);
        // }
        //
        //
        // function test_delete()
        // {
        //     //Arrange
        //     $id = null;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //     $vendor1->save();
        //
        //     $id2 = null;
        //     $name2 = "Portland Game Store";
        //     $description2 = "Awesome good timez!";
        //     $phone2 = "999-999-9999";
        //     $url2 = "http://www.theportlandgamestore.com/";
        //     $photo2 = "/img/pdxgamestore.jpg";
        //     $type_id2 = 2;
        //     $address_id2 = 37;
        //     $vendor2 = new Vendor($name2, $description2, $phone2, $url2, $photo2, $type_id2, $address_id2, $id2);
        //     $vendor2->save();
        //
        //     //Act
        //     $vendor1->delete();
        //     $result = Vendor::getAll();
        //
        //     //Assert
        //     $this->assertEquals([$vendor2], $result);
        // }
        //
        // function test_findById()
        // {
        //     //Arrange
        //     $id = null;
        //     $name = "Guardian Games";
        //     $description = "Awesome good timez!";
        //     $phone = "999-999-9999";
        //     $url = "https://www.ggportland.com";
        //     $photo = "/img/GGfacade.jpg";
        //     $type_id = 2;
        //     $address_id = 34;
        //     $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
        //     $vendor1->save();
        //
        //     $id2 = null;
        //     $name2 = "Portland Game Store";
        //     $description2 = "Awesome good timez!";
        //     $phone2 = "999-999-9999";
        //     $url2 = "http://www.theportlandgamestore.com/";
        //     $photo2 = "/img/pdxgamestore.jpg";
        //     $type_id2 = 2;
        //     $address_id2 = 37;
        //     $vendor2 = new Vendor($name2, $description2, $phone2, $url2, $photo2, $type_id2, $address_id2, $id2);
        //     $vendor2->save();
        //
        //     //Act
        //     $search_id = $vendor2->getId();
        //     $result = Vendor::findById($search_id);
        //
        //     //Assert
        //     $this->assertEquals($vendor2, $result);
        // }

        function test_findByName()
        {
            //Arrange
            $id = null;
            $name = "Guardian Games";
            $description = "Awesome good timez!";
            $phone = "999-999-9999";
            $url = "https://www.ggportland.com";
            $photo = "/img/GGfacade.jpg";
            $type_id = 2;
            $address_id = 34;
            $vendor1 = new Vendor($name, $description, $phone, $url, $photo, $type_id, $address_id, $id);
            $vendor1->save();

            $id2 = null;
            $name2 = "Portland Game Store";
            $description2 = "Awesome good timez!";
            $phone2 = "999-999-9999";
            $url2 = "http://www.theportlandgamestore.com/";
            $photo2 = "/img/pdxgamestore.jpg";
            $type_id2 = 2;
            $address_id2 = 37;
            $vendor2 = new Vendor($name2, $description2, $phone2, $url2, $photo2, $type_id2, $address_id2, $id2);
            $vendor2->save();

            //Act
            $search_name = $vendor2->getName();
              $result = Vendor::findByName($search_name);

            //Assert
            $this->assertEquals($vendor2, $result);
        }


//End Test
    }
?>
