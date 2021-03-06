<?php
    require 'controller/apiController.php';
    require 'vendor/autoload.php';
    /* CORS DISABLE */

    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') 
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
        header('Access-Control-Allow-Headers: token, Content-Type');
        header('Access-Control-Max-Age: 1728000');
        header('Content-Length: 0');
        header('Content-Type: text/plain');
        die();
    }

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');


    /* END CORS DISABLE */


    $router = new AltoRouter();
    $router->map('GET','/','ApiController.obtainAll');

    $router->map('GET','/show/[i:id]/','ApiController.cibleId');
    $router->map('GET','/update/[i:id]/','ApiController.cibleId2');

   
    $router->map('POST','/updates/[i:id]-[*:owner]-[*:tel]-[*:location]-[*:area]-[*:details]-[*:price]','ApiController.update');

    $router->map('GET','/save/[*:owner]-[*:tel]-[*:location]-[*:area]-[*:details]-[*:price]','ApiController.save');
    $router->map('POST','/save/[*:owner]-[*:tel]-[*:location]-[*:area]-[*:details]-[*:price]','ApiController.save');

    $router->map('GET','/delete/[i:id]/','ApiController.unset');
    $router->map('POST','/delete/[i:id]/','ApiController.unset');
    
    $match = $router->match();
    if($match !== null)
    {

        $code = explode(".",$match['target']);
        if (method_exists($code[0],$code[1])) 
        {   
            return call_user_func_array([(new $code[0]),$code[1]],$match['params']);
        }
        else 
        {
            return http_response_code(404);
        }

    }
    else
    {
        echo "no Match";
    }
