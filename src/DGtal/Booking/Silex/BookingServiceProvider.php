<?php

namespace DGtal\Booking\Silex;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use DGtal\BookingApiClient\Client\BookingClient;

/**
 * A Booking service provider for Silex
 *
 * @author Rodrigo Muñoz <rodrigoguzman@gmail.com>
 */
class BookingServiceProvider implements ServiceProviderInterface
{

    public function register(Container $app)
    {
        $app['booking.auth'] = array();

        $app['booking'] = function ($app) {

            $client = new BookingClient($app['booking.auth']);

            return $client;

        };

    }

    public function boot(Container $app)
    {}

}