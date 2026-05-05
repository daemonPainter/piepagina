<?php
/**
 * Define the internationalization functionality.
 */
class Piepagina_i18n
{
    public function load_plugin_textdomain()
    {
        load_plugin_textdomain(
            'piepagina',
            false,
            dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );
    }
}