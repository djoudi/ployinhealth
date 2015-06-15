<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use JJG\Ping;

class CheckController extends Controller {

    public function check($url) {
        $host = $url;
        $ping = new Ping($host);
        $latency = $ping->ping();
        if ($latency !== false) {
            return 'OK';
        }
        else {
            return 'FAILED';
        }
    }

}
