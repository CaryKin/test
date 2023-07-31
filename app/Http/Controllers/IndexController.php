<?php

namespace App\Http\Controllers;

use App;
use App\Common\Facades\Services;
use GuzzleHttp\Client;

class IndexController extends Controller
{
    public function index()
    {

        Services::productDtk()->sendCatWechatGroup(App\Common\Enums\WechatClassEnum::CAT);
    }
}
