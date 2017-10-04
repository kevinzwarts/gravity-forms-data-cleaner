<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 10/3/2017
 * Time: 8:18 PM
 */

namespace ZwartsFormDataCleaner\SettingsPage;


class GravityFormsAdminTab extends BaseSettingsPage implements IAdminPageTab
{
    public function __construct() {
        $this->tabName = 'Gravity Forms';
        $this->tabKey = 'gravityforms';
    }

    /**
     * Load current tab
     *
     * @return mixed
     */
    public function load()
    {
        // TODO: Implement load() method.
    }
}