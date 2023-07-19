<?php
return [
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    '{page:\d+}' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'page' => [
        'controller' => 'main',
        'action' => 'page',
    ],

    'post/{id:\d+}' => [
        'controller' => 'main',
        'action' => 'post',
    ],
];
?>