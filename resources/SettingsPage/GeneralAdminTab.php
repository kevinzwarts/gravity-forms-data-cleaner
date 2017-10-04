<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 10/3/2017
 * Time: 8:21 PM
 */

namespace GravityFormsDataCleaner\SettingsPage;


class GeneralAdminTab extends BaseSettingsPage implements IAdminPageTab
{
    public function __construct() {
        $this->tabName = 'General';
        $this->tabKey = 'general';
    }

    public function load()
    {
        /**
         * register our zwarts_fdc_options_page to the admin_menu action hook
         */
        add_action('admin_menu', [$this, 'addOptionsPage']);
    }


    /**
     * top level menu
     */
    public function addOptionsPage()
    {
        // add top level menu page
        add_menu_page(
            self::GRAVITYFORMS_DATA_CLEANER_ADMIN_PAGE_TITLE,
            self::GRAVITYFORMS_DATA_CLEANER_ADMIN_PAGE_TITLE,
            'manage_options',
            self::GRAVITYFORMS_DATA_CLEANER_ADMIN_PAGE_TITLE,
            [$this, 'loadOptionsPageHtml']
        );
    }


    /**
     * top level menu:
     * callback functions
     */
    public function loadOptionsPageHtml()
    {
    }
}