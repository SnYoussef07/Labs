<?php

use App\Features\PostTypes\ServicePostType;
use App\Database\Database;


add_action('init', [ServicePostType::class, 'register']);



register_activation_hook(__DIR__ . '/LabServices.php', [Database::class, 'init']);

