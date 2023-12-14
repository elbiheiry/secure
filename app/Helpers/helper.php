<?php
use Illuminate\Support\Str;

if (!function_exists('failed_validation')) {
    function failed_validation($error)
    {
        return response()->json($error, 400);
    }
}
if (!function_exists('add_response')) {
    function add_response($url = null)
    {
        return response()->json([
            'message' => 'Data has been added successfully',
            'url' => $url
        ], 200);
    }
}

if (!function_exists('update_response')) {
    function update_response($url)
    {
        return response()->json([
            'message' => 'Data has been updated successfully',
            'url' => $url
        ], 200);
    }
}

if (!function_exists('error_response')) {
    function error_response()
    {
        return response()->json('Error , please try again later', 400);
    }
}

if (!function_exists('success_response')) {
    function success_response($message ,$url)
    {
        return response()->json([
            'message' => $message,
            'url' => $url
        ], 200);
    }
}

if (!function_exists('aurl')) {
    function aurl($path)
    {
        return asset('admin-assets/' . $path);
    }
}

if (!function_exists('surl')) {
    function surl($path)
    {
        return asset('site-assets/' . $path);
    }
}

if (!function_exists('sanctum')) {
    function sanctum()
    {
        return auth()->guard('sanctum');
    }
}

if (!function_exists('member')) {
    function member()
    {
        return auth()->guard('members');
    }
}

if (!function_exists('api_response_success')) {
    function api_response_success($data)
    {
        return response()->json([
            'status' => true,
            'data' => $data,
        ], 200);
    }
}

if (!function_exists('api_response_error')) {
    function api_response_error($message = null)
    {
        $message = $message != null ? $message : ('Error , please try again later');

        return response()->json([
            'status' => false,
            'message' => $message,
        ], 400);
    }
}

if (!function_exists('locale')) {
    function locale()
    {
        return app()->getLocale();
    }
}

if (!function_exists('module_path')) {
    function module_path($name, $path = '')
    {
        return app()->basePath() . DIRECTORY_SEPARATOR . 'Modules' . DIRECTORY_SEPARATOR . $name .  $path;
    }
}