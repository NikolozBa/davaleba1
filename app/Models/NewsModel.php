<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    public function getNews()
    {
        return [
            [
                'page' => 1,
                'text' => 'The COVID-19 pandemic caused a major shift in workplaces with many working from home, but that caused another shift: an increase in harassment and hostility toward women and minorities.'
            ],
            [
                'page' => 2,
                'text' => 'Project Include, a nonprofit that analyzes the tech industry, surveyed 3,000 people on how workplaces have changed, and found an increase in harassment and hostility, harmful work expectations, and anxiety.'
            ],
            [
                'page' => 3,
                'text' => 'These harms draw from systemic issues of injustice and inequity, but also from specific outcomes of COVID-19, and they affect all workplaces, large and small, in all sectors, around the world," the report said.'
            ],
            [
                'page' => 4,
                'text' => 'Remote work has created its own set of problems and amplified long-standing ones in the workplace, the report said, adding that "harassment and hostility are taking new forms since the pandemic." And post-pandemic, remote work may be here to stay. '
            ],
            [
                'page' => 5,
                'text' => 'Those experiencing more harm as work moved online were more often women, nonbinary, Asian, Black, Indigenous, Latinx, and/or people over 50 years old, the report found. '
            ],
//            [
//                'page' => 6,
//                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
//            ],
        ];
    }

    public function getPages()
    {

        return count($this->getNews());

    }

    public function extractNewsName($text){
        return substr($text, 0, env('NEWS_TITLE_SYMBOLS'));
    }
}
