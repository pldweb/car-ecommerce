<?php

if (!function_exists('formInput')) {
    function formInput($type, $name, $attributes = [])
    {
        $value = old($name);
        $attrString = '';
        foreach ($attributes as $key => $val) {
            $attrString .= "$key=\"$val\" ";
        }
        return "<input type=\"$type\" name=\"$name\" value=\"$value\" class=\"form-control\" $attrString>";
    }
}

if (!function_exists('formSubmit')) {
    function formSubmit($text = 'Submit', $attributes = [])
    {
        $attrString = '';
        foreach ($attributes as $key => $val) {
            $attrString .= "$key=\"$val\" ";
        }
        return "<button type=\"submit\" class=\"btn btn-primary\" $attrString>$text</button>";
    }
}

if(!function_exists('alert_success')){
    function alert_success($msg = null){
        $html = "<div class='alert alert-success alert-dismissible'>$msg</div>";
        return $html;
    }
}

