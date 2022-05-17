<?php
require_once __DIR__ . '/vendor/autoload.php';

use app\core\App;
use app\models\User;

//$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//$dotenv->load();


$config = [
    'db'=>[
        'dsn'=>getenv('DB_DSN').'dbname='.getenv('DB_NAME').';',
        'user'=>getenv('DB_USER'),
        'password'=>getenv('DB_PASSWORD')
    ]
];

$app = new App(__DIR__,$config);

$user = new User();

$user->id = '1';
$user->firstname = 'Test';
$user->lastname = 'User1';
$user->email = 'user1@test.com';
$user->status = '1';
$user->type = '0';
$user->password = '12345678';
$user->confirmPassword = '12345678';

try{
    $user->save();
    echo 'Test user created';
}
catch (PDOException){
    echo 'database error';
}

