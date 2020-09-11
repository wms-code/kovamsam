## Installation Steps


- git clone https://github.com/wms-code/kovamsam.git
- cd laraveladmin
- composer install
- cp .env.example .env (if windows  : copy .env.example .env)
- Update env (add database information)
- php artisan key:generate
- php artisan migrate
- php artisan multiauth:seed --role=super
