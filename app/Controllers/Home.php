<?php

namespace App\Controllers;
use App\Models\Event;

class Home extends BaseController
{
    public function index(): string
    {
        $filter = $this->request->getGet("filter");
        $date = $this->request->getGet("date");
        $orderType = $this->request->getGet("orderType");

        $db = db_connect();
        if ((isset($filter) && $filter != "") || (isset($date) && $date != "") || (isset($orderType) && $orderType != "")) 
        {
            $events = (new Event())->find($db, (string)$filter, (string)$date, (int)$orderType);
        }
        else
        {
            $events = (new Event())->findAll($db);
        }
        $db->close();

        $data = [
            "page_title" => "Início",
            "filter" => $filter,
            "date" => $date,
            "orderType"=> $orderType,
            "events" => $events,
        ];

        return view('home/index', $data);
    }
}
