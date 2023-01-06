<?php

return [
    // [
    //     'icon' => 'nav-icon fas fa-tachometer-alt',
    //     'route' => 'dashboard.dashboard',
    //     'title' => 'Dashboard',
    //     'active' => 'dashboard.dashboard',
    // ],
    [
        'icon' => 'fas fa-tags nav-icon',
        'route' => 'dashboard.categories.index',
        'title' => 'الاصناف',
        // 'badge' => 'New',
        'active' => 'dashboard.categories.*',
        'ability' => 'categories.view',
    ],
    [
        'icon' => 'fas fa-box nav-icon',
        'route' => 'dashboard.posts.index',
        'title' => 'المقالات',
        'active' => 'dashboard.posts.*',
        'ability' => 'posts.view',
    ],
    [
        'icon' => 'fas fa-box nav-icon',
        'route' => 'dashboard.users.index',
        'title' => 'المستخدمين',
        'active' => 'dashboard.users.*',
        'ability' => 'users.view',
    ],
];
