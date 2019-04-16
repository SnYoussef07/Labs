<?php

use App\Features\PostTypes\ServicePostType;

add_action('init', [ServicePostType::class, 'register']);
