You can follow along [here](https://medium.com/@zachvv11/building-a-real-time-chat-application-with-laravel-and-larasocket-c3e377537dc2).

# Getting Started
1. `git clone https://github.com/toilaloc/chat-realtime-with-larasocket.git`
1. `composer install`
1. `change .env and add those line`
1. `BROADCAST_DRIVER=larasocket`
`LARASOCKET_TOKEN=yourtoken`
`MIX_LARASOCKET_TOKEN="${LARASOCKET_TOKEN}"`
1. `php artisan key:generate`
1. Update your `.env` file with your `LARASOCKET_TOKEN`. You can get one for free at [Larasocket](https://larasocket.com)
1. `php artisan migrate`
1. `php artisan serve`
