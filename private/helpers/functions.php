<?php

function url_for($script_path)
{
    if ($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

function has_ua_ch_support()
{
    return isset($_SERVER['HTTP_SEC_CH_UA']);
}
