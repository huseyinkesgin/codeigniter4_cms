<?php

function public_images($url)
{
    return  base_url('public/admin/images/' . $url);
}

function public_assets($url)
{
    $data = link_tag('public/admin/assets/css/' . $url);
    return  $data;
}

function public_script($url)
{
    $data = script_tag('public/admin/assets/js/' . $url);
    return $data;
}
