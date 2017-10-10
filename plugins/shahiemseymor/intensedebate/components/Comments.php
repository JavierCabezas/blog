<?php namespace ShahiemSeymor\IntenseDebate\Components;

use Cms\Classes\ComponentBase;
use ShahiemSeymor\IntenseDebate\Models\Settings;

class Comments extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Comments',
            'description' => 'Displays IntenseDebate Commenting to your website.'
        ];
    }

    public function onRun()
    {
        $this->page['key'] = Settings::instance()->site_act;
    }
}