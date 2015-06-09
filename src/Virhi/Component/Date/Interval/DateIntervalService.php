<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 07/06/15
 * Time: 19:33
 */

namespace Virhi\Component\Date\Interval;
use \DateInterval;

trait DateIntervalService
{
    /**
     * @return bool
     */
    public static function dateIntervalisNull(DateInterval $dateInterval)
    {
        $result = false;
        $nb = $dateInterval->d + $dateInterval->i + $dateInterval->h + $dateInterval->m + $dateInterval->s + $dateInterval->y;

        if ($nb === 0) {
            $result = true;
        }

        return $result;
    }
}
