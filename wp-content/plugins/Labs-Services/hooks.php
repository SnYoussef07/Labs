<?php

use App\Database\Database;
use App\Features\PostTypes\ServicePostType;
use App\Features\MetaBoxes\ServiceIconeMetabox;



add_action('init', [ServicePostType::class, 'register']);
add_action('add_meta_boxes_service', [ServiceIconeMetabox::class, 'add_meta_box']); 

register_activation_hook(__DIR__ . '/LabServices.php', [Database::class, 'init']);
