<?php 

namespace app\routes;

class Routes
{
    public static function run(){
        return [
            'get' => [
                '/' => 'HomeController@index',
                '/user/[0-9]+' => 'UserController@show',
                '/register'=> 'RegisterController@store'
            ],
            'post' => []

        ];
    }
}
?>