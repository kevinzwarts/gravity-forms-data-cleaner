<?php

namespace GravityFormsDataCleaner\SettingsPage;

class AdminPageLoader
{
    private $pages;

    public function __construct(){
        // Add all tabs
        $this->pages = [
            new GeneralAdminTab(),
            new GravityFormsAdminTab(),
        ];
    }

    /**
     * Load all admin pages
     */
    public function loadAdminPages() {
        $tabs = [];
        foreach ($this->pages as $page) {
            if($page instanceof IAdminPageTab) {
                // Add tab
                $tabs[$page->getTabKey()] = $page->getTabName();

                $page->load();
            }
        }

        $this->loadTabs($tabs);
    }

    private function loadTabs($tabs, $current = 'homepage') {
//        echo '<div id="icon-themes" class="icon32"><br></div>';
//        echo '<h2 class="nav-tab-wrapper">';
//        foreach( $tabs as $tab => $name ){
//            $class = ( $tab == $current ) ? ' nav-tab-active' : '';
//            echo "<a class='nav-tab$class' href='?page=theme-settings&tab=$tab'>$name</a>";
//
//        }
//        echo '</h2>';
    }

}