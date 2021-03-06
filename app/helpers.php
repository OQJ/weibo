<?php


function get_db_config(){
    if (getenv('IS_IN_HEROKU')){
        $url = parse_url(getenv('DATABASE_URL'));

        return $db_config = [   
            'connection'=>'pgsql',
            'host'=>$url['host'],
            'database'=>substr($url['path'],1),
            'username'=> $url['user'],
            'password'=>$url['pass'],
        ];
    } else{
        return $db_config=[
            'connection'=>env('DB_CONNECTION','mysql'),
            'database'=>env('DB_DATABASE','forge'),
            'password'=>env('DB_PASSWORD',''),
            'username'=>env('DB_USERNAME','forge'),
            'host'=>env('DB_HOST','localhost'),
        ];
    }
}