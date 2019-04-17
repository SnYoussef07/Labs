<?php

use App\Database\Database;
use App\Features\MetaBoxes\ServiceIconeMetabox;
use App\Features\Pages\Page;
use App\Features\PostTypes\ServicePostType;
use App\Features\PostTypes\TeamPostType;
use App\Http\Controllers\MailController;
use App\Setup;

add_action('init', [ServicePostType::class, 'register']);
add_action('init', [TeamPostType::class, 'register']);
add_action('admin_menu', [Page::class, 'init']);
add_action('admin_init', [Setup::class, 'start_session']);

add_action('add_meta_boxes_service', [ServiceIconeMetabox::class, 'add_meta_box']);
add_action('save_post_' . ServicePostType::$slug, [ServiceIconeMetabox::class, 'save']);
add_action('admin_action_send-mail', [MailController::class, 'send']);

register_activation_hook(__DIR__ . '/LabServices.php', [Database::class, 'init']);
