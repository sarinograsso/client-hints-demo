<?php

function get_all_client_hints()
{
    $all_hints = [
        'Sec-CH-UA' => [
            'name' => 'Sec-CH-UA',
            'description' => 'List of browser brands and their significant version',
            'default' => true
        ],
        'Sec-CH-UA-Mobile' => [
            'name' => 'Sec-CH-UA-Mobile',
            'description' => 'Boolean indicating if the browser is on a mobile device (?1 for true) or not (?0 for false)',
            'default' => true
        ],
        'Sec-CH-UA-Full-Version' => [
            'name' => 'Sec-CH-UA-Full-Version',
            'description' => '[Deprecated] The complete version for the browser',
            'default' => false
        ],
        /*'Sec-CH-UA-Full-Version-List' => [
            'name' => 'Sec-CH-UA-Full-Version-List',
            'description' => 'List of browser brands and their full version',
            'default' => false
        ],*/
        'Sec-CH-UA-Platform' => [
            'name' => 'Sec-CH-UA-Platform',
            'description' => 'The platform for the device, usually the operating system (OS)',
            'default' => true
        ],
        'Sec-CH-UA-Platform-Version' => [
            'name' => 'Sec-CH-UA-Platform-Version',
            'description' => 'The version for the platform or OS',
            'default' => false
        ],
        'Sec-CH-UA-Arch' => [
            'name' => 'Sec-CH-UA-Arch',
            'description' => 'The underlying architecture for the device. While this may not be relevant to displaying the page, the site may want to offer a download which defaults to the right format',
            'default' => false
        ],
        'Sec-CH-UA-Model' => [
            'name' => 'Sec-CH-UA-Model',
            'description' => 'The device model',
            'default' => false
        ],
        'Sec-CH-UA-Bitness' => [
            'name' => 'Sec-CH-UA-Bitness',
            'description' => 'The underlying architecture\'s bitness (i.e., the size in bits of an integer or memory address)',
            'default' => false
        ],
        /*'Save-Data' => [
            'name' => 'Save-Data',
            'description' => 'Indicates the user agent\'s preference for reduced data usage',
            'default' => false
        ],*/
        'DPR' => [
            'name' => 'DPR',
            'description' => 'Device Pixel Ratio, reports the ratio of physical pixels to CSS pixels of the user\'s screen',
            'default' => false
        ],
        /*'Width' => [
            'name' => 'Width',
            'description' => 'Gives a server the layout width of the image',
            'default' => false
        ],*/
        'Viewport-Width' => [
            'name' => 'Viewport-Width',
            'description' => 'Width of the user\'s viewport in CSS pixels',
            'default' => false
        ],
        /*'Viewport-Height' => [
            'name' => 'Viewport-Height',
            'description' => 'Represents the user-agent’s current viewport height',
            'default' => false
        ],*/
        'Device-Memory' => [
            'name' => 'Device-Memory',
            'description' => 'Approximate amount of memory the current device has in GiB, the value is intentionally coarse and valid values are 0.25, 0.5, 1, 2, 4, and 8',
            'default' => false
        ],
        'RTT' => [
            'name' => 'RTT',
            'description' => 'Approximate Round Trip Time, in milliseconds, on the application layer, includes server processing time and is rounded to the nearest 25 milliseconds to prevent fingerprinting',
            'default' => false
        ],
        'Downlink' => [
            'name' => 'Downlink',
            'description' => 'Expressed in megabits per second (Mbps), reveals the approximate downstream speed of the user\'s connection and is rounded to the nearest multiple of 25 kilobits per second',
            'default' => false
        ],
        'ECT' => [
            'name' => 'ECT',
            'description' => 'Effective Connection Type, describes the user\'s connection within specified ranges of both RTT and Downlink values and valid values are 4g, 3g, 2g, and slow-2g',
            'default' => false
        ],
        'Sec-CH-Prefers-Color-Scheme' => [
            'name' => 'Sec-CH-Prefers-Color-Scheme',
            'description' => 'The user\'s preferred color scheme',
            'default' => false
        ],
    ];

    foreach ($all_hints as $hint_name => $hint_data) {
        $all_hints[$hint_name]['php_name'] = 'HTTP_' . strtoupper(str_replace('-', '_', $hint_name));
    }

    return $all_hints;
}
