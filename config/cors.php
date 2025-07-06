<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'], // Mengizinkan semua HTTP method: GET, POST, PUT, DELETE, dll

    'allowed_origins' => ['*'], // Bisa ganti dengan ['http://localhost:3000'] jika spesifik

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // Mengizinkan semua header

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
