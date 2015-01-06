<?php

namespace DGtal\Booking\Silex;

use Silex\Application;
use Silex\ServiceProviderInterface;
use DGtal\BookingApiClient\Client\BookingClient;

/**
 * A Booking service provider for Silex
 *
 * @author Rodrigo Muñoz <rodrigoguzman@gmail.com>
 */
class BookingServiceProvider implements ServiceProviderInterface
{

    public function register(Application $app)
    {
        $app['booking.auth'] = array();

        $app['booking'] = $app->share(function() use ($app) {

            $client = new BookingClient($app['booking.auth']);

            return $client;

        });

    }

    public function boot(Application $app)
    {}

}