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
    $minDate = date("Y-m-d", strtotime("-2 week"));
    $maxDate = date("Y-m-d");
    $html = "<byu-news categories=\"all\" tags=\"all\" max-date=\"{$maxDate}\" min-date=\"{$minDate}\" story-limit=\"{$storyLimit}\"></byu-news>";
    return [
      '#type' => 'inline_template',
      '#template' => '<div class="byu-news-block">{{ content | raw }}</div>',
      '#context' => [
        'content' => $html,
      ],
      '#attached' => [
        'library' => [
          'byu_news/byu_news'
        ]
      ]
    ];
  }
}