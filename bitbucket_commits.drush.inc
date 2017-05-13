<?php

/**
 * Implements hook_drush_command().
 */
function bitbucket_commits_drush_command() {
  $items = array();
  $items['bitbucket-commits'] = array(
    'description' => t('Bitbucket Commits - get commits from all configured services.'),
    'bootstrap' => DRUSH_BOOTSTRAP_DRUPAL_FULL,
    'aliases' => ['bbc'],
    'examples' => array(
      'bitbucket-commits' => 'Synchronize all commits with configured services.',
    ),
  );
  return $items;
}

/**
 * Import Tweets
 *
 * Drush command to import all tweets from all feeds or just the one specified. 
 * TODO: Allow specifying import by machine name
 *
 * Implements drush_HOOK_COMMAND().
 */
function drush_bitbucket_commits() {
  _bitbucket_commits_retrieve(TRUE);
  _bitbucket_commits_github_retrieve(TRUE);
}