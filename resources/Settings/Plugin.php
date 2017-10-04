<?php

namespace GravityFormsDataCleaner\Settings;

use GravityFormsDataCleaner\SettingsPage\AdminPageLoader;

class Plugin
{
    public function loadSettingsPage() {
        $adminPageLoader = new AdminPageLoader();
        $adminPageLoader->loadAdminPages();
    }

}