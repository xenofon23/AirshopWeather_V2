<?php

namespace Controls\Functions;

use Controls\Router\routing;

class init
{
    public function load(){
        $router= new routing();
        $input=file_get_contents('php://input');
        $request=  $_SERVER['REQUEST_URI'] === ($_SERVER['APP_BASE'] ?? '') ? '/index.html' : $_SERVER['REQUEST_URI'];
        return !empty($input) ? $this->runCommand($input,$_SERVER['REQUEST_METHOD']) : $router->routing($request);
    }
//prepi na gini sanitaze to uri kai ta data;
    public function runCommand($input,$method){
        $input=json_decode($input,true);
        switch ($input['flag']){
            case 'register':$register= new User();
                $register->register($input);
                break;
            case'login':$login= new User();
                $login->login($input);
                break;
            case'history':saveSearch($input);
                break;
            case 'saved_data':$data= new weatherData();
                return$data->handleData($input,$method);
                break;
            default: return false;


        }


    }

    public function run():string
    {
        $data=[
            'h1'=>'My First Heading',
            'p1'=>'Myfirst paragraph'
        ];
        $dummyArray=[
            '{{language}}'=>'en',
            '{{title}}'=>'<title>PageTitle</title>',
            '{{meta}}'=>'',
            '{{css}}'=>'',
            '{{page}}'=>'index',
            '{{data}}'=>json_encode($data,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT),
            '{{js}}'=>'<script type="module" src="Assets/development/js/dexie.mjs"></script><script type="module" src="Assets/development/js/main.js"></script>'
        ];
        $bluePrint=file_get_contents('Views/htmlBluePrint.tpl');
        $html=strtr($bluePrint,$dummyArray);
        return $html;

 }

}