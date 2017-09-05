<?php
/**
 * @file
 * Contains \Drupal\byu_news\Plugin\Block\ByuNewsBlock.
 */

namespace Drupal\byu_news\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides BYU News block.
 *
 * @Block(
 *   id = "byu_news_block",
 *   admin_label = @Translation("BYU News Block"),
 *   category = @Translation("Blocks")
 * )
 */
class ByuNewsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $storyLimit = 3;
    $minDate = date("Y-m-d", strtotime("-1 month"));
    $maxDate = date("Y-m-d");
    $html = "<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.byu.edu/byu-news-components/latest/byu-news-components.min.css\"><script async=\"\" src=\"https://cdn.byu.edu/byu-news-components/1.x.x/byu-news-components.min.js\"></script>";
    $html .= "<byu-news categories=\"2975\" tags=\"all\" max-date=\"{$maxDate}\" min-date=\"{$minDate}\" story-limit=\"{$storyLimit}\"></byu-news>";
    return [
      '#type' => 'inline_template',
      '#template' => '<div class="byu-news-block">{{ content | raw }}</div>',
      '#context' => [
        'content' => $html,
      ]
    ];
  }
}
