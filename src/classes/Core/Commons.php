<?php

namespace Core;

class Commons
{

    public static function file_build_path(string ...$segments) {
        return join(DIRECTORY_SEPARATOR, $segments);
    }

    public static function url_path() {
        $url_path = $_SERVER['REQUEST_URI'];
        $new_url_path = self::slugify($url_path);
        self::force_slugify($new_url_path, $url_path);
        return (!empty($new_url_path) ? $new_url_path : '/');
    }

    public static function force_slugify(string $new_url_path, string $old_url_path) {
        $get_query_string = self::get_query_string($old_url_path);
        if ($new_url_path.$get_query_string !== $old_url_path) {
            http_response_code(302);
            header('Location: '.$new_url_path.$get_query_string);
            exit;
        }
    }

    public static function str_to_cc(string $str) {
        $new_str = strip_tags($str);
        $new_str = preg_replace('/[^A-Za-z0-9]+/', ' ', $new_str); // replace non alpha-numeric chars to space
        $new_str = ucwords($new_str);
        $new_str = preg_replace('/\s+/', '', $new_str);
        return $new_str;
    }

    public static function slugify(string $url_path) {
        $new_url_path = preg_replace('/\?.*/', '', $url_path); // strip out get queries
        $new_url_path = preg_replace('/[\/]{2,}/', '/', $new_url_path); // unify multiple slashes
        $new_url_path = preg_replace('/[^\/]$/', '$0/', $new_url_path); // disable strict mode and force trailing slash
        $new_url_path = preg_replace('/(?:\.html?|\.php|\.aspx?)(\/?)$/', '$1', $new_url_path); // remove common page extensions
        $new_url_path = preg_replace('/(?:%..|[^A-Za-z0-9\/])+/', '-', $new_url_path); // replace non alpha-numeric chars to dash
        $new_url_path = ($new_url_path[0] !== '/' ? $url_path : $new_url_path);
        return $new_url_path;
    }

    public static function get_query_string(string $url_path) {
        $get_query = preg_replace('/^[^\?]+/', '', $url_path);
        return $get_query;
    }

    public static function routes_slugify(array $routes) {
        foreach ($routes as $route => $view_file) {
            $new_routes[self::slugify($route)] = $view_file;
        }
        return $new_routes;
    }

}