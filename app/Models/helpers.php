<?php

use Illuminate\Support\Str;

if (! function_exists('upload_file')) {
    function upload_file($field, $relative_path) {
        $file = request()->file($field);
        $filename = $file->getClientOriginalName();
        $location = $relative_path;
        $file->storeAs('public'.$location, $filename);
        return  '/storage'.$location.'/'.$filename;
    }
}

if (! function_exists('upload_files')) {
    function upload_files($field, $relative_path) {
        $links = [];
        foreach (request()->file($field) as $file) {
            $filename = $file->getClientOriginalName();
            $location = $relative_path;
            $file->storeAs('public'.$location, $filename);
            array_push($links, "/storage$location/$filename");
        }
        return $links;
    }
}

if (! function_exists('get_file_path')) {
    function get_file_path($path) {
        $new_path = Str::replaceFirst('/storage', '/public', $path);
        return $new_path;
    }
}

?>