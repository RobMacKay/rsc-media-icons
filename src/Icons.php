<?php 
namespace Rscmedia\Icons;

class Icons
{
    public static function getFlag($countryCode, $class = 'h-6' )
    {
        return '<img src="/assets/flags/3x2/' . strtoupper($countryCode) . '.svg" alt="' . strtoupper($countryCode) . ' Flag" class="'.$class.'" />';
    }
}