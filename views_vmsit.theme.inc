<?php

/**
 * @file
 * Preprocessors and helper functions to make theming easier.
 */

use Drupal\views_vmsit\ViewsVmsit;
use Drupal\Core\Template\Attribute;

/**
 * Prepares variables for views carousel template.
 *
 * Default template: views-vmsit-carousel.html.twig.
 *
 * @param array $vars
 *   An associative array containing:
 *   - view: A ViewExecutable object.
 *   - rows: The raw row data.
 */
