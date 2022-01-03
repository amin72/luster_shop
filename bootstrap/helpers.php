<?php

use Carbon\Carbon;


function slugify($string, $separator='-') {
    $string = preg_replace('/[^a-z0-9ก-๙เแ]/i', $separator, $string);
    $string = preg_replace('/-+/', '-', $string);
    $string = preg_replace('/-$|^-/', '', $string);
    return $string;
}


function create_token($len=6) {
    return ''.join(Arr::random([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], $len));
}


function next5Min() {
    return Carbon::now()->add(5, 'min');
}


function create_small_image($image_file, $path, $width, $height) {
    $small_image_name = time() . '_small.' . $image_file->extension();
    $image = \Image::make($image_file->path());
    $image->resize($width, $height)->save(public_path($path) . $small_image_name);
    return $small_image_name;
}


function sendSMSToken($phone, $token, $type) {
    $message = 'پیامی ست نشده\n\n';
    $label = env('APP_LABEL');

    if ($type == 'activate_user') {
        $message = "کد جهت فعال سازی اکانت در " . $label . "\n\n" . $token;
    } else if ($type == 'reset_password') {
        $message = "کد جهت تغییر رمز عبور در " . $label . "\n\n" . $token;
    }

    try {
        $result = Kavenegar::Send('', $phone, $message);
        if($result) {
            return true;
        }
    } catch(\Kavenegar\Exceptions\ApiException $e) {
        // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
        return false;
    } catch(\Kavenegar\Exceptions\HttpException $e) {
        // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
        return false;
    }
 
    return false;
}