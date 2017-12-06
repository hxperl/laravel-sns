# Laravel SNS app

- language : php
- framework : laravel 5.5
- templete engine : blade templeting engine
- database : mysql 5.7

### Design pattern : MVC

- model - app
- view - resource\views
- controller - app\Http\Controllers

##### ORM

- eloquent	

##### post data 암호화

- bcrypt()

##### migration

file location : database/migrations/

```shell
php artisan migrate
```

##### Routing protection

- 'auth' middleware
- App\Exceptions\Handler.php -> unauthenticated function 추가