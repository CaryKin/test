<?php

namespace App\Common\Helper;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;

class FileHelper
{
    public static function download($url)
    {
        $client = new Client(['verify' => false]);

        $file_temp_path = date("Y-m-d") . '/file/' . pathinfo($url)['basename']; //保存文件地址+原始文件名
        $tempData = $client->request('get', $url)->getBody()->getContents();
        Storage::disk('public')->put($file_temp_path, $tempData);
        return "/storage/app/public/" . $file_temp_path;
    }
}
