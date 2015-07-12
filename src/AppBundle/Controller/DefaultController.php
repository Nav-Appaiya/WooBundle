<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        // Orders, Customers, Products, Reports, Coupons, or Webhooks

        // Call WooClient Service defined in WooBundle's service.yml file
        $wooclient = $this->get('woo.client');


        // Get all orders
        $orders = $wooclient->orders->get();

        // Get detail of specific order
        $orderDetails = $wooclient->orders->get(103);

        // Or make your custom call passing $method, $path & $request_data (query params or request body)
        $customApiCall = $wooclient->make_api_call("GET", "orders/103", array());


        exit;
        // return $this->render('default/index.html.twig');
    }
}
