<?php

return [
  'default_role' => 'user',

  'roles' => [
    [
      'name' => 'super_admin',
      'permissions' => [
        'dashboard',
        'manage_pages',
        'manage_users',
        'manage_posts',
        'manage_roles_and_permissions',
        'manage_settings',
        'manage_menus',
      ]
    ],
    [
      'name' => 'admin',
      'permissions' => [
        'dashboard',
        'manage_users',
      ]
    ],
    [
      'name' => 'writer',
      'permissions' => [
        'dashboard',
        'manage_posts',
      ]
    ],
    [
      'name' => 'user',
      'permissions' => [
        //
      ]
    ],
  ]

];