<?php

namespace App\Controllers;

class Parameterization extends BaseController
{
    public function index(): string
    {
        $data = [
            "page_title" => "Parametrização",
        ];
        return view("parameterization/index", $data);
    }

    public function create()
    {
        $data = $this->request->getPost();

        return view("parameterization/index", $data);
    }
}