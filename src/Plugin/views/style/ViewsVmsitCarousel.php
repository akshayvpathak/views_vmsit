<?php

namespace Drupal\views_vmsit\Plugin\views\style;

use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Style plugin to render each item as a row in a Bootstrap Carousel.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "views_VMSIT_carousel",
 *   title = @Translation("VMSIT Carousel"),
 *   help = @Translation("Displays rows in a VMSIT Carousel."),
 *   theme = "views_vmsit_carousel",
 *   theme_file = "../views_vmsit.theme.inc",
 *   display_types = {"normal"}
 * )
 */
class ViewsVmsitCarousel extends StylePluginBase {
   /**
   * Overrides \Drupal\views\Plugin\views\style\StylePluginBase::usesRowPlugin.
   *
   * @var bool
   */
  protected $usesRowPlugin = TRUE;

  /**
   * Overrides \Drupal\views\Plugin\views\style\StylePluginBase::usesRowClass.
   *
   * @var bool
   */
  protected $usesRowClass = TRUE;
  /**
   * Does the style plugin for itself support to add fields to it's output.
   *
   * @var bool
   */
  protected $usesFields = TRUE;

  /**
   * Definition.
   */
  protected function defineOptions() {
    $options = parent::defineOptions();

    // General carousel settings.
    $options['arrow'] = ['default' => FALSE];
    $options['dots'] = ['default' => FALSE];
    $options['infinite'] = ['default' => TRUE];
    $options['speed'] = ['default' => 1000];
    $options['variablewidth'] = ['default' => FALSE];
    return $options;
  }

  /**
   * Render the given style.
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);

    $fields = ['' => t('<None>')];
    $fields += $this->displayHandler->getFieldLabels(TRUE);

    $form['speed'] = [
      '#type' => 'number',
      '#title' => $this->t('Speed'),
      '#description' => t('The amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle.'),
      '#default_value' => $this->options['speed'],
    ];

    $form['arrow'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Display Arrow'),
      '#default_value' => $this->options['arrow'],
    ];
    $form['infinite'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Infinite'),
      '#default_value' => $this->options['infinite'],
    ];
    $form['dots'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Display Dots'),
      '#default_value' => $this->options['dots'],
    ];
    $form['variablewidth'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Has Variable Width'),
      '#default_value' => $this->options['variablewidth'],
    ];
  }
}
