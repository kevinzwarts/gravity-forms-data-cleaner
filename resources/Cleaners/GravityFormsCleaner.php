<?php

namespace GravityFormsDataCleaner\Cleaners;

use GravityFormsDataCleaner\Settings\ISettings;

class GravityFormsCleaner extends BaseCleaner implements ICleaner
{
    const FORM_ROWS_TABLE = 'form_meta';

    public $deleteDataUntill = null; // Remove data from beginning to given date

    public function __construct() {

    }

    public function clean()
    {
        global $wpdb;

        $wpdb->delete(self::FORM_ROWS_TABLE, []);
    }
}