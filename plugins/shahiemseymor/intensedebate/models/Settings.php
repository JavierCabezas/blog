<?php namespace ShahiemSeymor\IntenseDebate\Models;

use Model;

class Settings extends Model
{

    public $implement = ['System.Behaviors.SettingsModel'];
    public $settingsCode = 'intensedebate_settings';
    public $settingsFields = 'fields.yaml';

    public $rules = [
        'site_act' => 'required',
    ];

}