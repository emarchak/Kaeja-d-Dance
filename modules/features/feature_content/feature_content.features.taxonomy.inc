<?php
/**
 * @file
 * feature_content.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function feature_content_taxonomy_default_vocabularies() {
  return array(
    'audience_type' => array(
      'name' => 'Audience Type',
      'machine_name' => 'audience_type',
      'description' => 'The target audience of the work or film',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
    ),
    'blog_topic' => array(
      'name' => 'Blog Topic',
      'machine_name' => 'blog_topic',
      'description' => '',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
    ),
    'cast' => array(
      'name' => 'Cast',
      'machine_name' => 'cast',
      'description' => 'A cast member of a work or film to be used to credit the individual.',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
    ),
    'event_type' => array(
      'name' => 'Event Type',
      'machine_name' => 'event_type',
      'description' => 'Methods of categorizing events.',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
    ),
    'film_status' => array(
      'name' => 'Film Status',
      'machine_name' => 'film_status',
      'description' => '',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
    ),
    'support_type' => array(
      'name' => 'Support Type',
      'machine_name' => 'support_type',
      'description' => '',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
    ),
    'work_series' => array(
      'name' => 'Work Series',
      'machine_name' => 'work_series',
      'description' => 'Series that the work is contained in',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
    ),
    'work_type' => array(
      'name' => 'Work Type',
      'machine_name' => 'work_type',
      'description' => 'Type of performance to be included in works',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
    ),
  );
}
