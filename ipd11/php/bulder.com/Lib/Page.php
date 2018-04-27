<?php

namespace Lib;

final class Page
{
    public static function navItems()
    {
        $navItems = array(
            array(
                'url' => '/residanciel',
                'text' => 'residanciel'
            ),
            array(
                'url' => '/courses',
                'text' => 'Courses'
            ),
            array(
                'url' => '/course-registration',
                'text' => 'Register Course'
            ),
            array(
                'url' => '/courses-per-student',
                'text' => 'Show courses by student'
            )
        );

        return $navItems;
    }
}