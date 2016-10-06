<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__."/../inc/Connection.php";
    require_once __DIR__.'/../src/Address.php';
    require_once __DIR__."/../src/Rider.php";
    require_once __DIR__."/../src/Service.php";
    require_once __DIR__."/../src/Vendor.php";
    require_once __DIR__."/../src/Client.php";

//Setup
    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();

//Home Path
    $app->get("/", function() use ($app) {
        $vendors = Vendor::getAll();
        $id = 1;
        $client = Client::find($id);
        return $app['twig']->render('index.html.twig', array ('vendors' => $vendors, 'client' => $client));
    });

    $app->get("/order/{vendor_name}/{client_id}", function($vendor_name, $client_id) use ($app){

        $client = Client::find($client_id);
        $vendor = Vendor::findByName($vendor_name);
        $address_id = $client->getAddressId();
        $address = Address::findById($address_id);
        return $app['twig']->render("order_vendor_client.html.twig", array('client' => $client, 'vendor' => $vendor, 'address' => $address ));
    });



    $app->post("/edit_address/{vendor_name}/{client_id}", function ($vendor_name, $client_id) use ($app){
        $client = Client::find($client_id);
        $address_id = $client->getAddressId();
        $address = Address::findById($address_id);
        $vendor = Vendor::findByName($vendor_name);
        return $app['twig']->render("edit_client_address.html.twig", array('client' => $client, 'address' => $address, 'vendor' => $vendor));
    });

    $app->post("/address_update/order/{vendor_name}/{client_id}", function ($vendor_name, $client_id) use ($app) {
        $type = $_POST['type'];
        $address_one = $_POST['address_one'];
        $address_two = $_POST['address_two'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $country = $_POST['country'];
        $client = Client::find(1);
        $new_address = new Address($type, $address_one, $address_two, $city, $state, $zip, $country);
        $new_address->save();
        $vendor = Vendor::findByName($vendor_name);
        return $app['twig']->render("order_vendor_client.html.twig", array('client' => $client, 'vendor' => $vendor, 'address' => $new_address ));
    });


//End App
    return $app;
?>
