<?php namespace sendgrid;

use App;
use AppConfig;
use Request;
use manifest;
use URLController;

class init extends AppConfig
{

    function init(App $app)
    {

    }

    function registry(manifest $manifest)
    {

    }

    function urls(URLController $controller)
    {
        $controller->register('/sendgrid',['GET','POST'],false,function (Request $request){
            return $this->render($this,'sample.html',['name'=>'sendgrid']);
        });
    }


}
