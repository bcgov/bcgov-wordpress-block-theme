<?php
/**
 * Bootstrap file to initialise admin features.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block;

// Add BC Gov Blocks Theme block filters.
require 'filters/button-enhanced.php';
require 'filters/image-enhanced.php';
require 'filters/media-text-enhanced.php';
require 'filters/site-logo-enhanced.php';

// Add BC Gov Blocks Theme block patterns.
require 'theme-block-patterns.php';
