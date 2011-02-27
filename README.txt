/* $Id: README.txt,v 1.2 2009/10/11 07:45:24 callison Exp $ */

CONTENTS OF THIS FILE
---------------------

 * Current maintainer
 * Features
 * Installation
 * Customization

CURRENT MAINTAINER
------------------

- Chris Allison (callison) - http://drupal.org/user/49429

FEATURES
--------
Charity is a simple, but elegant theme. It is fully XHTML 1.0 Strict and CSS 
Level 3 compliant. Since Charity is fixed-width, there is a simple "Expand
Page" button on all administration pages to allow for easy administration of 
your site. There are some theme-specific settings (detailed below) to help you
easily and quickly customize your theme.

INSTALLATION
------------

- Blocks
  When Charity is first enabled, you will most likely need to change the block 
  settings. To do this, go to "Administer -> Site Building -> Blocks"

  A recommended default block configuration:

  REGION                BLOCK
  -----------------------------
  Header Left           Search form (see below for more info on enabling the 
                            search block)
                        Note: This region is not expandable, but can handle 
                            several lines of text for a Who's Online block for 
                            small sites or something similar
  Sidebar               Navigation
                        User Login
                        Any other blocks you want (Who's online, Who's new, 
                            Syndicate, custom, etc)
  Footer                Powered by Drupal
                        Custom footer block (note that the footer message is 
                            also available - see below)

- Menus
  Charity is designed to be used with Primary Links enabled. It is not required,
  but is highly recommended. To enable the Primary Links menu, either edit the 
  menu itself under "Administration -> Site Building -> Menus -> Primary Links" 
  or (with the Menu module enabled) assign Primary Links items to created 
  content.

  that, go to "Administer -> Site Building -> Themes" click the "Configure" tab,
  Charity supports the use of Secondary Menus. The menu will be displayed at the
  bottom of the page directly above the footer block region.

- Site Information
  By default, the site slogan is not enabled in Drupal. To enable it, go to 
  "Administer -> Site Configuration -> Site Information" and put in your desired
  slogan. You may then need to enable it in your theme settings as well. To do 
  that, go to "Administer -> Site Building -> Themes" click the "Configure" tab,
  click on the "Charity" sub-tab and then enable the use of the site slogan. 
  Please note that the "Reset to defaults" button will change the settings to 
  the Global theme settings.

CUSTOMIZATION
-------------

- Enabling the Search Form Block
  The Search block is not enabled by default in Drupal. To enable it, go to 
  "Administer -> Modules" and check the Search Module under the optional Drupal 
  Core Modules section. The search form block will now be available in the 
  "Administer -> Site Building -> Blocks" page. 

- Using the Footer Message
  Charity supports use of the footer message as well as a footer block region. 
  For a simple copyright notice or something comparable, you can put text into a
  footer message at "Admin -> Site Configuration -> Site Information". This text
  will then be displayed below the footer block region.

- Theme-Specific Settings
  There are 2 theme-specific settings available to Charity.
    1) The option to show or hide the girl in the header and
    2) Which side to display the sidebar on

  Go to "Administer -> Site Building -> Themes" and click on the "Configure" tab
  and then click on the "Charity" sub-tab to change these settings.

  The default settings are 1) to show the girl and 2) display the sidebar on the
  right side of the page.
