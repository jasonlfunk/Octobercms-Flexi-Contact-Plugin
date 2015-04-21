<?php
/**
 * Created by PhpStorm.
 * User: Lamin Sanneh
 * Date: 5/19/14
 * Time: 12:49 AM
 */

namespace ToughSpace\FlexiContact;

use System\Classes\PluginBase;
use Backend\Facades\Backend;

class Plugin extends PluginBase{

    /**
     * Returns information about this plugin, including plugin name and developer name.
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Flexi Contact (updated by TS)',
            'description' => 'A Flexible and Configurable Contact Form to Add to any Page',
            'author'      => 'Lamin Sanneh (updated by Jason)',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'ToughSpace\FlexiContact\Components\ContactForm' => 'contactForm',
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Flexi Contact Settings',
                'description' => 'Manage the settings for the flexi contact form.',
                'category'    => 'Marketing',
                'icon'        => 'icon-cog',
                'class'       => 'ToughSpace\FlexiContact\Models\Settings',
                'order'       => 100
            ]
        ];
    }
}