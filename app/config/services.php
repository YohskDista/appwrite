<?php

return [
    '/' => [
        'name' => 'Homepage',
        'controller' => 'controllers/home.php',
        'sdk' => false,
    ],
    'console/' => [
        'name' => 'Console',
        'controller' => 'controllers/console.php',
        'sdk' => false,
    ],
    'v1/account' => [
        'name' => 'Account',
        'description' => '/docs/services/account.md',
        'controller' => 'controllers/account.php',
        'sdk' => true,
    ],
    'v1/auth' => [ // Add to docs later: You can also learn how to [configure support for our supported OAuth providers](/docs/oauth)
        'name' => 'Auth',
        'description' => '/docs/services/auth.md',
        'controller' => 'controllers/auth.php',
        'sdk' => true,
    ],
    'v1/avatars' => [
        'name' => 'Avatars',
        'description' => '/docs/services/avatars.md',
        'controller' => 'controllers/avatars.php',
        'sdk' => true,
    ],
    'v1/database' => [
        'name' => 'Database',
        'description' => '/docs/services/database.md',
        'controller' => 'controllers/database.php',
        'sdk' => true,
    ],
    'v1/locale' => [
        'name' => 'Locale',
        'description' => '/docs/services/locale.md',
        'controller' => 'controllers/locale.php',
        'sdk' => true,
    ],
    'v1/health' => [
        'name' => 'Health',
        'controller' => 'controllers/health.php',
        'sdk' => false,
    ],
    'v1/projects' => [
        'name' => 'Projects',
        'controller' => 'controllers/projects.php',
        'sdk' => true,
    ],
    'v1/storage' => [
        'name' => 'Storage',
        'description' => '/docs/services/storage.md',
        'controller' => 'controllers/storage.php',
        'sdk' => true,
    ],
    'v1/teams' => [
        'name' => 'Teams',
        'description' => '/docs/services/teams.md',
        'controller' => 'controllers/teams.php',
        'sdk' => true,
    ],
    'v1/users' => [
        'name' => 'Users',
        'description' => '/docs/services/users.md',
        'controller' => 'controllers/users.php',
        'sdk' => true,
    ],
    'v1/mock' => [
        'name' => 'Mock',
        'description' => '',
        'controller' => 'controllers/mock.php',
        'sdk' => false,
    ],
];
