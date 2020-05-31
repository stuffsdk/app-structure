<?php namespace sendgrid;

use Fields;
use Model;


class SampleModel extends Model
{

    public $name;

    function init(Fields $fields)
    {
        $this->name = $fields->CharField(64);
    }

}
