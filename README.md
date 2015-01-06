# Booking Service Provider for Silex

## Registering

Register the service provider in your Silex application.

```php
$app->register(new BookingServiceProvider(), array(
    'booking.auth' => array(
        'username' => '<booking-username>',
        'password' => '<booking-password>'
    )
));
```
