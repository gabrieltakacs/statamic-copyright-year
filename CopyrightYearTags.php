<?php

namespace Statamic\Addons\CopyrightYear;

use Statamic\Extend\Tags;

class CopyrightYearTags extends Tags
{
    /**
     * The {{ copyright_year }} tag
     *
     * @return string|array
     */
    public function index()
    {
        $value = $this->getConfig('copyright_year');
        $currentYear = date('Y');

        if (empty($value) || false === is_numeric($value)) {
            return $currentYear;
        }

        if ($value >= $currentYear) {
            return $value;
        }

        return $value . ' - ' . $currentYear;
    }
}
