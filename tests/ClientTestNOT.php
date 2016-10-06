<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__."/../inc/ConnectionTest.php";
    require_once __DIR__."/../src/Client.php";

    class ClientTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Client::deleteAll();
        }

        function test_save()
        {
            //Arrange
            $email = "something@something.com";
            $name = "Someone Mcsomeoneson";
            $password = "asdf12342";
            $phone = "867-5309";
            $address_id = 1;
            $test_client = new Client ($email, $name, $password, $phone, $address_id);

            //Act
            $test_client->save();
            $result = Client::getAll();

            //Assert
            $this->assertEquals([$test_client], $result);


        }

        function test_getAll()
        {
            //Arrange
            $email = "something@something.com";
            $name = "Someone Mcsomeoneson";
            $password = "asdf12342";
            $phone = "867-5309";
            $address_id = 1;
            $test_client = new Client ($email, $name, $password, $phone, $address_id);
            $test_client->save();

            $email2 = "something@something.com";
            $name2 = "Someface Mcsomefaceson";
            $password2 = "asdf12342";
            $phone2 = "867-5309";
            $address_id2 = 2;
            $test_client2 = new Client ($email2, $name2, $password2, $phone2, $address_id2);
            $test_client2->save();

            //Act

            $result = Client::getAll();

            //Assert
            $this->assertEquals([$test_client, $test_client2], $result);
        }

        function test_find()
        {
            //Arange
            $email = "something@something.com";
            $name = "Someone Mcsomeoneson";
            $password = "asdf12342";
            $phone = "867-5309";
            $address_id = 1;
            $test_client = new Client ($email, $name, $password, $phone, $address_id);
            $test_client->save();

            $email2 = "something@something.com";
            $name2 = "Someface Mcsomefaceson";
            $password2 = "asdf12342";
            $phone2 = "867-5309";
            $address_id2 = 2;
            $test_client2 = new Client ($email2, $name2, $password2, $phone2, $address_id2);
            $test_client2->save();

            //Act
            $search_id = $test_client->getId();
            $result = Client::find($search_id);

            //Assert
            $this->assertEquals($test_client, $result);
        }

        function test_updateName()
        {
            //Arange
            $email = "something@something.com";
            $name = "Someone Mcsomeoneson";
            $password = "asdf12342";
            $phone = "867-5309";
            $address_id = 1;
            $test_client = new Client ($email, $name, $password, $phone, $address_id);
            $test_client->save();

            //Act
            $new_name = "Tom";
            $test_client->updateName($new_name);
            $result = $test_client->getName();

            //Assert
            $this->assertEquals($new_name, $result);
        }

        function test_updateEmail()
        {
            //Arange
            $email = "something@something.com";
            $name = "Someone Mcsomeoneson";
            $password = "asdf12342";
            $phone = "867-5309";
            $address_id = 1;
            $test_client = new Client ($email, $name, $password, $phone, $address_id);
            $test_client->save();

            //Act
            $new_email = "nothing@nothing.com";
            $test_client->updateEmail($new_email);
            $result = $test_client->getEmail();

            //Assert
            $this->assertEquals($new_email, $result);
        }

        function test_updatePassword()
        {
            //Arange
            $email = "something@something.com";
            $name = "Someone Mcsomeoneson";
            $password = "asdf12342";
            $phone = "867-5309";
            $address_id = 1;
            $test_client = new Client ($email, $name, $password, $phone, $address_id);
            $test_client->save();

            //Act
            $new_password = "Tom";
            $test_client->updatePassword($new_password);
            $result = $test_client->getPassword();

            //Assert
            $this->assertEquals($new_password, $result);
        }

        function test_updatePhone()
        {
            //Arange
            $email = "something@something.com";
            $name = "Someone Mcsomeoneson";
            $password = "asdf12342";
            $phone = "867-5309";
            $address_id = 1;
            $test_client = new Client ($email, $name, $password, $phone, $address_id);
            $test_client->save();

            //Act
            $new_phone = "999-9999";
            $test_client->updatePhone($new_phone);
            $result = $test_client->getPhone();

            //Assert
            $this->assertEquals($new_phone, $result);
        }

//End Test
    }
?>
