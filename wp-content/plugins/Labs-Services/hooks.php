<?php

use App\Database\Database;
use App\Features\Pages\Page;

//use App\Features\PostTypes\ServicePostType;

//add_action('init', [ServicePostType::class, 'register']);
add_action('admin_menu', [Page::class, 'init']);

register_activation_hook(__DIR__ . '/LabServices.php', [Database::class, 'init']);
