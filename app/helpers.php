<?php
/**
 * Created by PhpStorm.
 * User: puje
 * Date: 9/11/14
 * Time: 12:20 PM
 */
function set_active($path, $active = 'active')
{
    return Request::is($path) ? $active : '';
}