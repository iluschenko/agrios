<?php
/**
 * @file
 * Contains \Drupal\metatag_twitter_cards\Plugin\metatag\Tag\TwitterCardsPlayerStream.
 */

namespace Drupal\metatag_twitter_cards\Plugin\metatag\Tag;

use Drupal\metatag\Plugin\metatag\Tag\MetaPropertyBase;

/**
 * The Twitter Cards player stream url metatag.
 *
 * @MetatagTag(
 *   id = "twitter_cards_player_stream",
 *   label = @Translation("MP4 media stream URL"),
 *   description = @Translation("The full URL for an MP4 video (h.264) or audio (AAC) stream, takes precidence over the other media player field."),
 *   name = "twitter:player:stream",
 *   group = "twitter_cards",
 *   weight = 403,
 *   type = "uri",
 *   multiple = FALSE
 * )
 */
class TwitterCardsPlayerStream extends MetaPropertyBase {
}
