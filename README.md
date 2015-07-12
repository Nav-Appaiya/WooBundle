The Woocommerce Bundle for Symfony
=========

Note:
    - This is just a simple port of the WooCommerce REST API PHP Client Library for Symfony projects
    - Currently supports only 1 shop to be used with, but you know how to customize this to your own needs.
    - Install bundle, add bundle to kernel, configure services.yml with your shop api keys & shopurl and go.
    - The full WooCommerce REST API PHP Client Library is located under the Client folder of the bundle

Installation:
    - Download bundle and put it under your src directory
    - Add the bundle to the appkernel.php by adding "new WooBundle\WooBundle()"
    - Open the WooBundle and look under Resources/config for the service.yml file
    - Add your Woocommerce Shop API keys & Store URL
    - Done, look under this AppBundle/Controller for the DefaultController where some examples are given.

