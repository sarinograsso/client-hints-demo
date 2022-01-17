<?php

function get_all_client_hints()
{
    return [
        'Sec-CH-UA' => [
            'name' => 'Sec-CH-UA',
            'php_name' => 'HTTP_SEC_CH_UA',
            'description' => 'List of browser brands and their significant version',
            'default' => true
        ],
        'Sec-CH-UA-Mobile' => [
            'name' => 'Sec-CH-UA-Mobile',
            'php_name' => 'HTTP_SEC_CH_UA_MOBILE',
            'description' => 'Boolean indicating if the browser is on a mobile device (?1 for true) or not (?0 for false)',
            'default' => true
        ],
        'Sec-CH-UA-Full-Version' => [
            'name' => 'Sec-CH-UA-Full-Version',
            'php_name' => 'HTTP_SEC_CH_UA_FULL_VERSION',
            'description' => '[Deprecated] The complete version for the browser',
            'default' => false
        ],
        /*'Sec-CH-UA-Full-Version-List' => [
            'name' => 'Sec-CH-UA-Full-Version-List',
            'php_name' => 'HTTP_SEC_CH_UA_FULL_VERSION_LIST',
            'description' => 'List of browser brands and their full version',
            'default' => false
        ],*/
        'Sec-CH-UA-Platform' => [
            'name' => 'Sec-CH-UA-Platform',
            'php_name' => 'HTTP_SEC_CH_UA_PLATFORM',
            'description' => 'The platform for the device, usually the operating system (OS)',
            'default' => true
        ],
        'Sec-CH-UA-Platform-Version' => [
            'name' => 'Sec-CH-UA-Platform-Version',
            'php_name' => 'HTTP_SEC_CH_UA_PLATFORM_VERSION',
            'description' => 'The version for the platform or OS',
            'default' => false
        ],
        'Sec-CH-UA-Arch' => [
            'name' => 'Sec-CH-UA-Arch',
            'php_name' => 'HTTP_SEC_CH_UA_ARCH',
            'description' => 'The underlying architecture for the device. While this may not be relevant to displaying the page, the site may want to offer a download which defaults to the right format',
            'default' => false
        ],
        'Sec-CH-UA-Model' => [
            'name' => 'Sec-CH-UA-Model',
            'php_name' => 'HTTP_SEC_CH_UA_MODEL',
            'description' => 'The device model',
            'default' => false
        ],
        'Sec-CH-UA-Bitness' => [
            'name' => 'Sec-CH-UA-Bitness',
            'php_name' => 'HTTP_SEC_CH_UA_BITNESS',
            'description' => 'The underlying architecture\'s bitness (i.e., the size in bits of an integer or memory address)',
            'default' => false
        ],
        /*'Save-Data' => [
            'name' => 'Save-Data',
        'php_name' => 'HTTP_SAVE_DATA',
            'description' => 'Indicates the user agent\'s preference for reduced data usage',
            'default' => false
        ],*/
        'DPR' => [
            'name' => 'DPR',
            'php_name' => 'HTTP_DPR',
            'description' => 'Device Pixel Ratio, reports the ratio of physical pixels to CSS pixels of the user\'s screen',
            'default' => false
        ],
        /*'Width' => [
            'name' => 'Width',
        'php_name' => 'HTTP_WIDTH',
            'description' => 'Gives a server the layout width of the image',
            'default' => false
        ],*/
        'Viewport-Width' => [
            'name' => 'Viewport-Width',
            'php_name' => 'HTTP_VIEWPORT_WIDTH',
            'description' => 'Width of the user\'s viewport in CSS pixels',
            'default' => false
        ],
        /*'Viewport-Height' => [
            'name' => 'Viewport-Height',
            'php_name' => 'HTTP_VIEWPORT_HEIGHT',
            'description' => 'Represents the user-agent’s current viewport height',
            'default' => false
        ],*/
        'Device-Memory' => [
            'name' => 'Device-Memory',
            'php_name' => 'HTTP_DEVICE_MEMORY',
            'description' => 'Approximate amount of memory the current device has in GiB, the value is intentionally coarse and valid values are 0.25, 0.5, 1, 2, 4, and 8',
            'default' => false
        ],
        'RTT' => [
            'name' => 'RTT',
            'php_name' => 'HTTP_RTT',
            'description' => 'Approximate Round Trip Time, in milliseconds, on the application layer, includes server processing time and is rounded to the nearest 25 milliseconds to prevent fingerprinting',
            'default' => false
        ],
        'Downlink' => [
            'name' => 'Downlink',
            'php_name' => 'HTTP_DOWNLINK',
            'description' => 'Expressed in megabits per second (Mbps), reveals the approximate downstream speed of the user\'s connection and is rounded to the nearest multiple of 25 kilobits per second',
            'default' => false
        ],
        'ECT' => [
            'name' => 'ECT',
            'php_name' => 'HTTP_ECT',
            'description' => 'Effective Connection Type, describes the user\'s connection within specified ranges of both RTT and Downlink values and valid values are 4g, 3g, 2g, and slow-2g',
            'default' => false
        ],
        'Sec-CH-Prefers-Color-Scheme' => [
            'name' => 'Sec-CH-Prefers-Color-Scheme',
            'php_name' => 'HTTP_SEC_CH_PREFERS_COLOR_SCHEME',
            'description' => 'The user\'s preferred color scheme',
            'default' => false
        ],
    ];
}
