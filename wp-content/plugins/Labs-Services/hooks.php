<?php

use App\Database\Database;
use App\Features\MetaBoxes\ServiceIconeMetabox;
use App\Features\PostTypes\ServicePostType;
use App\Features\PostTypes\TeamPostType;

add_action('init', [ServicePostType::class, 'register']);
add_action('init', [TeamPostType::class, 'register']);

add_action('add_meta_boxes_service', [ServiceIconeMetabox::class, 'add_meta_box']);
add_action('save_post_' . ServicePostType::$slug, [ServiceIconeMetabox::class, 'save']);

register_activation_hook(__DIR__ . '/LabServices.php', [Database::class, 'init']);
