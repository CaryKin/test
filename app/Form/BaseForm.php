<?php

namespace App\Form;



class BaseForm
{
    public function __construct($params)
    {
        if ($params) {
            foreach ($params as $key => $param) {
                $this->$key = $param;
            }
        }
    }
}
