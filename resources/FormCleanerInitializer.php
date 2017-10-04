<?php
namespace ZwartsFormDataCleaner;

use ZwartsFormDataCleaner\Cleaners\GravityFormsCleaner;
use ZwartsFormDataCleaner\Cleaners\ICleaner;
use ZwartsFormDataCleaner\Cleaners\NinjaFormsCleaner;
use ZwartsFormDataCleaner\Settings\GravityFormsSettings;
use ZwartsFormDataCleaner\Settings\ISettings;
use ZwartsFormDataCleaner\Settings\NinjaFormsSettings;

class FormCleanerInitializer
{
    private $cleaners = [];
    public function __construct()
    {
        $this->cleaners[] = new GravityFormsCleaner( new GravityFormsSettings());
    }

    public function clean(){
        foreach($this->cleaners as $cleaner){
            if($cleaner instanceof ICleaner) {
                $cleaner->reloadSettings();
                $cleaner->clean();
            }
        }
    }

}