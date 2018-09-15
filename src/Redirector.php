<?php
/**
 * Created by PhpStorm.
 * User: Walderlan Sena <senawalderlan@gmail.com>
 * Date: 15/09/18
 * Time: 18:01
 */

namespace WS\RouterRedirector;

use WS\Session\SessionContainer;

abstract class Redirector
{
    /**
     * @param $route
     * @param array $message
     */
    public static function redirectToRoute($route, $message = [])
    {
        if (count($message) > 0) {
            foreach ($message as $key => $value) {
                SessionContainer::setSession($key, $value);
            }
        }
        return header("Location: $route");
    }
}