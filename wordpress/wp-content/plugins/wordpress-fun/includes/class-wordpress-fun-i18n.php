<?php

class Wordpress_Fun_i18n
{

    public function load_plugin_textdomain()
    {
        load_plugin_textdomain(
            'wordpress-fun',
            false,
            dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );
    }
}