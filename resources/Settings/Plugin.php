<?php

namespace ZwartsFormDataCleaner\Settings;

use ZwartsFormDataCleaner\SettingsPage\AdminPageLoader;

class Plugin
{
    public function loadSettingsPage() {
        $adminPageLoader = new AdminPageLoader();
        $adminPageLoader->loadAdminPages();
    }

}