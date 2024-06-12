<?php

namespace App\Libraries;

class Components
{
    public function cardTitle($title)
    {
        return view("shared/components/card_title", ["title"=> $title]);
    }
}