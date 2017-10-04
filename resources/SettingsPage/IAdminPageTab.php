<?php

namespace GravityFormsDataCleaner\SettingsPage;

interface IAdminPageTab
{
    /**
     * Load current tab
     *
     * @return mixed
     */
    public function load();

    public function getTabKey();

    public function getTabName();

}