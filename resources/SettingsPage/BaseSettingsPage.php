<?php

namespace GravityFormsDataCleaner\SettingsPage;

abstract class BaseSettingsPage
{
    const GRAVITYFORMS_DATA_CLEANER_ADMIN_PAGE_PREFIX = 'gf_data_cleaner';
    const GRAVITYFORMS_DATA_CLEANER_ADMIN_PAGE_TITLE = 'GF Data Cleaner';

    protected $tabKey; // Key to recognize page tab
    protected $tabName; // Display name of tab

    public function getTabKey()
    {
        return $this->tabKey;
    }

    public function getTabName()
    {
        return $this->tabName;
    }

}