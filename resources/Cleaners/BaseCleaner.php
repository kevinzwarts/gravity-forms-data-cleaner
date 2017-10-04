<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 10/2/2017
 * Time: 10:48 PM
 */

namespace ZwartsFormDataCleaner\Cleaners;


use ZwartsFormDataCleaner\Settings\ISettings;

abstract class BaseCleaner implements ICleaner
{
    protected $settings;

    public function __construct(ISettings $settings)
    {
        $this->settings = $settings;
    }

    public function reloadSettings() {
        $this->settings->reload();
    }
}