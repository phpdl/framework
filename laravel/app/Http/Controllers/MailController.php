<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;

class MailController extends Controller
{
    public function send()
    {

        $name = 'ABCABCABC';

    $flag = \Mail::send('content1', ['name' => $name], function ($message) {
            $to = '584271086@qq.com';
            $message->to($to)->subject('ABCABCABC');
        });
        if ($flag) {
            echo '发送邮件成功，请查收！';
        } else {
            echo '发送邮件失败，请重试！';
        }

    }
}