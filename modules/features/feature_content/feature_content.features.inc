<?php
/**
 * @file
 * feature_content.features.inc
 */

/**
 * Implements hook_node_info().
 */
function feature_content_node_info() {
  $items = array(
    'award' => array(
      'name' => t('Award'),
      'base' => 'node_content',
      'description' => t('An award given to Kaeja d\'Dance.'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'educational_programme' => array(
      'name' => t('Educational Programme'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => t('A workshop, lecture or other educational programme offered by Kaeja d\'Dance. '),
    ),
    'event' => array(
      'name' => t('Event'),
      'base' => 'node_content',
      'description' => t('An event arranged by Kaeja d\'Dance, such as a performance of a work or a screening of a film.	'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'film' => array(
      'name' => t('Film'),
      'base' => 'node_content',
      'description' => t('A film produced by Kaeja d\'Dance'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'news' => array(
      'name' => t('News'),
      'base' => 'node_content',
      'description' => t('A news post to be featured on the website, and sent out in digest to subscribed individuals.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'page' => array(
      'name' => t('Blank Page'),
      'base' => 'node_content',
      'description' => t('A standard page for the website'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'publicity' => array(
      'name' => t('Publicity'),
      'base' => 'node_content',
      'description' => t('A record of press coverage for Kaeja d\'Dance.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'slider' => array(
      'name' => t('Slider Content'),
      'base' => 'node_content',
      'description' => t('Slides to be featured on the front page.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'work' => array(
      'name' => t('Work'),
      'base' => 'node_content',
      'description' => t('A repertoire piece created by Kaeja d\'Dance.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
