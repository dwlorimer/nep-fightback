<?php
/*
 * Plugin Name: Stop Autofill from NeverEmailPasswords
 * Plugin URI: https://github.com/dwlorimer/nep-fightback
 * Version: 0.1
 * Author: David Lorimer
 * Description: Overwrite Pressable's NEP password fill function
 */

$nep = new NeverEmailPasswordsnepfb();
$nep->registerHooksfb();

class NeverEmailPasswordsnepfb
{
    protected $userData;

    public function registerHooksfb()
    {
        add_action('admin_print_scripts', array($this, 'registerUIHooksnepfb'), 99);
    }

    public function registerUIHooksnepfb()
    {
        if (defined('IS_PROFILE_PAGE')) {
          if(IS_PROFILE_PAGE === true) {
            return false;
          }
        }

        wp_enqueue_script(
            'nepfb_remove_pwd_fill',
            plugins_url('/js/nepfb_remove_pwd_fill.js', __FILE__),
            array(),
            false,
            true
        );
    }


}

