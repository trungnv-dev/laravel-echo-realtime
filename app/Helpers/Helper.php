<?php
use Carbon\Carbon;

if (!function_exists('diff_date')) {
    function diff_date($date)
    {
        $date = Carbon::create($date);
        $now = Carbon::now();

        return $date->diffForHumans($now); //12 phút trước
    }
}