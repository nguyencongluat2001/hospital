<?php

return [
  //role 1
  "ADMIN" => [
    'home' => [
        'name' => 'Trang Chủ',
        'icon' => 'fas fa-home',
        'a'    => 'nav-link link-home',
        'href' => '/system/home/index',
    ],
    'users' => [
        'name' => 'Quản trị người dùng',
        'icon' => 'fas fa-users',
        'a'    => 'nav-link link-user',
        'href' => '/system/user/index',
    ],
    'category' => [
        'name' => 'Quản trị danh mục',
        'icon' => 'far fa-calendar-alt',
        'a'    => 'nav-link link-category',
        'href' => '/system/category/index',
    ],
    'hospital' => [
        'name' => 'Quản trị bệnh viện',
        'icon' => 'fas fa-users',
        'a'    => 'nav-link link-user',
        'href' => '/system/hospital/index',
    ],
    'blog' => [
        'name' => 'Quản trị bài viết',
        'icon' => 'far fa-calendar-alt',
        'a'    => 'nav-link link-blog',
        'href' => '/system/blog/index',
    ],
    'Hospital' => [
        'name' => 'Cẩm nang',
        'icon' => 'fas fa-medkit',
        'a'    => 'nav-link link-Hospital',
        'href' => '/system/Hospital/index',
    ],
    'report' => [
        'name' => 'Báo cáo KPI',
        'icon' => 'fas fa-hand-holding-usd',
        'a'    => 'nav-link link-report',
        'href' => '/system/report/index',
    ],
   ],
];
