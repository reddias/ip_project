# Laravel Task List App
 - Multiple users & user management
 - Useful
 - Private task lists
 
If you want to create demo users and tasks you can easily with db:seed command.

<img src="https://i.ibb.co/qsVCn0w/image.png" alt="Laravel Todo App">

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

First of all, copy and rename .env.example file and write your db config.

#### Requirements
`PHP 7.2` `Nginx` `MySQL` `Composer` `Node.js`

---
#### Deployment script

```bash
composer install
php artisan cache:clear
php artisan config:clear
php artisan migrate --force
```

---
#### First deployment commands

`composer install`

`php artisan key:generate`

`php artisan migrate`

`php artisan db:seed`

---
