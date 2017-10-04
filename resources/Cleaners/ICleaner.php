<?php

namespace ZwartsFormDataCleaner\Cleaners;

interface ICleaner
{
    /**
     * Clean form data for current cleaner
     *
     * @return mixed
     */
    public function clean();

    /**
     * Reload settings
     * @return mixed
     */
    public function reloadSettings();

}