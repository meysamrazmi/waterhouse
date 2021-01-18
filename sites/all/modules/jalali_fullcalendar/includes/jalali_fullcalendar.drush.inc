<?php

/**
 * The JStree plugin URI.
 */
define('JFULLCALENDAR_DOWNLOAD_URI', 'https://github.com/mbbn/jalali_fullcalendar/archive/master.zip');

/**
 * Implements hook_drush_command().
 */
function jalali_fullcalendar_drush_command() {
  $items['download-jf'] = array(
      'description' => dt("Downloads the Jalali Fullcalendar Plugin."),
      'arguments' => array(
          'path' => dt('Optional. A path where to install the JStree plugin. If omitted Drush will use the default location.'),
          ));
  return $items;
}

/**
 * Implements hook_drush_help().
 */
function jalali_fullcalendar_drush_help($section) {
  switch ($section) {
    case 'drush:download-jf':
      return dt("Downloads the JStree plugin from arshaw.com, default location is sites/all/libraries.");
  }
}

/**
 * Commands to download the FullCalendar plugin.
 */
function drush_jalali_fullcalendar_download_jf($path = 'sites/all/libraries') {
  if (!drush_shell_exec('type unzip')) {
    return drush_set_error(dt('Missing dependency: unzip. Install it before using this command.'));
  }

  // Create the path if it does not exist.
  if (!is_dir($path)) {
    drush_op('mkdir', $path);
    drush_log(dt('Directory @path was created', array('@path' => $path)), 'notice');
  }

  // Set the directory to the download location.
  $olddir = getcwd();
  chdir($path);

  $filename = basename(JFULLCALENDAR_DOWNLOAD_URI);
  $dirname = basename(JFULLCALENDAR_DOWNLOAD_URI, '.zip');

  // Remove any existing FullCalendar plugin directory.
  if (is_dir($dirname)) {
    drush_log(dt('A existing Jalali FullCalendar plugin was overwritten at @path', array('@path' => $path)), 'notice');
  }
  // Remove any existing FullCalendar plugin zip archive.
  if (is_file($filename)) {
    drush_op('unlink', $filename);
  }

  // Download the zip archive.
  if (!drush_shell_exec('wget ' . JFULLCALENDAR_DOWNLOAD_URI)) {
    drush_shell_exec('curl -O ' . JFULLCALENDAR_DOWNLOAD_URI);
  }

  if (is_file($filename)) {
    // Decompress the zip archive.
    drush_shell_exec('unzip -qq -o ' . $filename);
    // Remove the zip archive.
    drush_op('unlink', $filename);    
    drush_shell_exec('mv ' . 'jalali_fullcalendar-master/* fullcalendar');
    drush_shell_exec('rm -rf jalali_fullcalendar-master');
  }

  // Set working directory back to the previous working directory.
  chdir($olddir);

  if (is_dir($path . '/fullcalendar')) {
    drush_log(dt('FullCalendar plugin has been downloaded to @path.', array('@path' => $path)), 'success');
  }
  else {
    drush_log(dt('Drush was unable to download the FullCalendar plugin to @path', array('@path' => $path)), 'error');
  }
}
