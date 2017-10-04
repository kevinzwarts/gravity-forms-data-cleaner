<?php
namespace GravityFormsDataCleaner;

use GravityFormsDataCleaner\Cleaners\GravityFormsCleaner;
use GravityFormsDataCleaner\Cleaners\ICleaner;
use GravityFormsDataCleaner\Cleaners\NinjaFormsCleaner;
use GravityFormsDataCleaner\Settings\GravityFormsSettings;
use GravityFormsDataCleaner\Settings\NinjaFormsSettings;

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