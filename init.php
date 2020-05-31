<?php namespace {name};

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
        $controller->register('/{name}',['GET','POST'],false,function (Request $request){
            return $this->render($this,'sample.html',['name'=>'{name}']);
        });
    }


}
