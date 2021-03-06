<?php

return [
    'private_key'  => env('MARVEL_PRIVATE_KEY'),
    'public_key'   => env('MARVEL_PUBLIC_KEY'),
    'base_uri'     => 'http://gateway.marvel.com/v1/public/',
    'cache_time'   => 1440, // 1 day
    'endpoints'    => [
        'comics'     => 'comics',
        'characters' => 'characters',
        'series'     => 'series',
    ],
    'series'       => [
        'thumbnail' => 'portrait_uncanny.jpg',
        'not_found' => 'images/image_not_found.jpg',
    ],
    'characters'   => [
        'thumbnail'               => 'portrait_uncanny.jpg',
        'profile_small_thumbnail' => 'portrait_medium.jpg',
    ],
    'social_links' => [
        'twitter'   => 'https://twitter.com/readmarvel',
        'facebook'  => 'https://www.facebook.com/readmarvel/',
        'instagram' => 'https://www.instagram.com/readmarvel/',
    ],
];