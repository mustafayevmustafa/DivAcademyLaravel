<?php

use Illuminate\Support\Facades\Cache;

if (!function_exists('settings')) {
    function settings($type = null)
    {
        $return = '';

        $settings = Cache::get('settings');

        if ($settings!=null) {
            foreach ($settings as $setting) {
                if ($setting->key==$type) {
                    $return .= $setting->value;
                }
                else if ($type === 'phone.icon') {
                    if ($setting->key == 'phone') {
                        $return .= $setting->image;
                    }
                }
            }
        }
        return $return;
    }
}



if (!function_exists('hascache')) {
    function hascache($key)
    {
        if (!Cache::has($key)) {
            Cache::remember($key, 86400, function () use ($key) {
                return DB::table($key)->get();
            });
        }
    }
}


//if (!function_exists('settings')) {
//    function settings($type = null)
//    {
//        $return = '';
//
//        $settings = Cache::get('settings');
//
//
//        foreach ($settings as $setting) {
//           if(is_null($type)){
//               if ($setting->key == 'facebook') {
//                   $return .= ' <a href="' . $setting->value . '" target="_blank" style="margin: 7px"><i class="fa fa-facebook"></i></a>';
//               }
//
//               if ($setting->key == 'twitter') {
//                   $return .= ' <a href="' . $setting->value . '" target="_blank" style="margin: 7px"><i class="fa fa-twitter"></i></a>';
//               }
//
//               if ($setting->key == 'linkedin') {
//                   $return .= ' <a href="' . $setting->value . '" target="_blank" style="margin: 7px"><i class="fa fa-linkedin-square"></i></a>';
//               }
//
//               if ($setting->key == 'instagram') {
//                   $return .= ' <a href="' . $setting->value . '" target="_blank" style="margin: 7px"><i class="fa fa-instagram"></i></a>';
//               }
//           }
//           else if ($type === 'phone') {
//               if ($setting->key == 'phone') {
//                   $return .= $setting->value;
//               }
//           }
//           else if ($type === 'phone.icon') {
//               if ($setting->key == 'phone') {
//                   $return .= $setting->image;
//               }
//           }
//           else if ($type === 'email') {
//               if ($setting->key == 'email') {
//                   $return .= $setting->value;
//               }
//           }
//           else if ($type === 'email.icon') {
//               if ($setting->key == 'email') {
//                   $return .= $setting->image;
//               }
//           }
//           else if ($type === 'location') {
//               if ($setting->key == 'location') {
//                   $return .= $setting->value;
//               }
//           }
//           else if ($type === 'location.icon') {
//               if ($setting->key == 'location') {
//                   $return .= $setting->image;
//               }
//           }
//           else if ($type === 'about') {
//               if ($setting->key == 'about') {
//                   $return .= $setting->content;
//               }
//           }
//
//           else if ($type === 'mail_to_forms') {
//               if ($setting->key == 'mail_to_forms') {
//                   $return .= $setting->value;
//               }
//           }
//
//           else if ($type === 'mail_to_forms') {
//               if ($setting->key == 'mail_to_forms') {
//                   $return .= $setting->value;
//               }
//           }
//
//        }
//
//
//        return $return;
//    }
//}
