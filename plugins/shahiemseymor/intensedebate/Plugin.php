<?php namespace ShahiemSeymor\IntenseDebate;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'IntenseDebate',
            'description' => 'Add IntenseDebate Commenting to your website.',
            'author'      => 'ShahiemSeymor',
            'icon'        => 'icon-comments-o'
        ];
    }

    public function registerComponents()
    {
        return [
            'ShahiemSeymor\IntenseDebate\Components\Comments'  => 'comments',
        ];
    }

    public function registerSettings()
    {
        return [
            'intensedebate' => [
                'label'       => 'IntenseDebate',
                'description' => 'Manage IntenseDebate settings.',
                'category'    => 'Misc',
                'class'       => 'ShahiemSeymor\IntenseDebate\Models\Settings',
                'icon' => ' icon-comments-o'
            ]
        ];
    }


}
