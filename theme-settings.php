<?php

/**
* Implementation of THEMEHOOK_settings() function.
*
* @param $saved_settings
*   array An array of saved settings for this theme.
* @return
*   array A form array.
*/
function phptemplate_settings($saved_settings) {
  /*
   * The default values for the theme variables. Make sure $defaults exactly
   * matches the $defaults in the template.php file.
   */
  $defaults = array(
    'charity_girl' => 1,
    'charity_sidebar-side' => 'right',
  );

  // Merge the saved variables and their default values
  $settings = array_merge($defaults, $saved_settings);

  // Create the form widgets using Forms API
  $form['charity_girl'] = array(
    '#type' => 'checkbox',
    '#title' => t('Display girl in header'),
    '#default_value' => $settings['charity_girl'],
  );
  $form['charity_sidebar-side'] = array(
    '#type'          => 'radios',
    '#title'         => t('Where should the sidebar be displayed?'),
    '#default_value' => $settings['charity_sidebar-side'],
    '#options'       => array(
                          'left' => t('Display sidebar on the left side'),
                          'right' => t('Display sidebar on the right side'),
                        ),
  );

  // Return the additional form widgets
  return $form;
}
?>