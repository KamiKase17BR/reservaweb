<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCoder extends Controller
{


    public function QrCoder($table){

        $url ="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=".$table;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
			curl_setopt($ch, CURLOPT_GET,           1 );
			curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: application/json', 'Cache-Control: no-cache', 'Content-length: 0'));
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
			curl_setopt($ch, CURLOPT_TIMEOUT, 8);

		$result = curl_exec ($ch);
        curl_close($ch);

        $qrcode = file_get_contents($url);

        return $qrcode;

    }



}
