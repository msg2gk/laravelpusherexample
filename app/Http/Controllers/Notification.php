<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;

class Notification extends Controller
{
    public function index(){
        $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'encrypted' => true
            );
                    $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'), 
            $options
            );
 
        $data['message'] = 'Hello Developers';
        $pusher->trigger('laravelpusher', 'App\\Events\\PostEvent', $data);

        // $pusher->trigger('laravelpusher', 'my-event', array('message' => 'hello world'));
 
    }
}
