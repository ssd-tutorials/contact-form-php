<?php


class Helper {



    public static function jsonEncode($value = null) {

        if (defined('JSON_UNESCAPED_UNICODE')) {

            return json_encode(
                $value,
                JSON_HEX_TAG |
                JSON_HEX_APOS |
                JSON_HEX_QUOT |
                JSON_HEX_AMP |
                JSON_UNESCAPED_UNICODE
            );

        } else {

            return json_encode(
                $value,
                JSON_HEX_TAG |
                JSON_HEX_APOS |
                JSON_HEX_QUOT |
                JSON_HEX_AMP
            );

        }

    }








    public static function alert($message = null, $type = 'alert') {

        $out  = '<div class="alert-box';
        $out .= !empty($type) ? ' '.$type : null;
        $out .= '">';
        $out .= $message;
        $out .= '</div>';

        return $out;

    }









}

















