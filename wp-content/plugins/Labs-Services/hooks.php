<?php

use App\Database\Database;
use App\Features\PostTypes\ServicePostType;

add_action('init', [ServicePostType::class, 'register']);

register_activation_hook(__DIR__ . '/LabServices.php', [Database::class, 'init']);
