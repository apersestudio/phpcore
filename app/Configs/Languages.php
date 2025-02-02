<?php
/**
 * If the user request an specific language:
 * The "html" attribute "lang" will be set to "html_iso" value
 * The "setlocale" php function will be called using "linux_locale" value
 * The "date_default_timezone_set" php function will be called using "timezone" value
 * 
 * In case the requested language is not in the list of availables:
 * We will use the "default" instead
 */
return [
    "default"=>"es-MX",
    "autodetect"=>false,
    "availables"=>[
        "es-MX" => ["linux_locale"=>"es_MX", "timezone"=>"America/Mexico_City"],
        "en-US" => ["linux_locale"=>"en_US", "timezone"=>"America/New_York"]
    ]
];
?>