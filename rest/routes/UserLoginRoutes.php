<?php
/*
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
// CRUD operations for todos entity
*/
/*

Flight::route('POST /login', function(){
    $login = Flight::request()->data->getData();
    $user = Flight::UserLoginDao()->get_user_by_email($login['email']);
    if (isset($user['id'])){


        $jwt = JWT::encode($user, Config::JWT_SECRET(), 'HS256');
        Flight::json(['token' => $jwt]);
    }
    else {
      Flight::json(["message" => "User doesn't exist"], 404);
    }


});
*/

/*
Flight::route('POST /login', function(){
    $login = Flight::request()->data->getData();
    $user = Flight::UserLoginDao()->get_user_by_email($login['email']);
    if (isset($user['id'])){
      if($user['password'] == md5($login['password'])){
        unset($user['password']);
        $jwt = JWT::encode($user, Config::JWT_SECRET(), 'HS256');
        Flight::json(['token' => $jwt]);
      }else{
        Flight::json(["message" => "Wrong password"], 404);
      }
    }else{
      Flight::json(["message" => "User doesn't exist"], 404);
    }
});
*/

?>
