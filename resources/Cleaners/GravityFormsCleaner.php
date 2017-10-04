<?php

namespace GravityFormsDataCleaner\Cleaners;


class GravityFormsCleaner extends BaseCleaner implements ICleaner
{
    const FORM_ROWS_TABLE = 'rg_lead';

    public $deleteDataUntill = null; // Remove data from beginning to given date

    public function clean()
    {
        global $wpdb;

        // Delete all submitted values untill a given date
        $wpdb->delete($wpdb->prefix . self::FORM_ROWS_TABLE, ['date_created' => date('d-m-Y', strtotime('now'))]);
    }
}