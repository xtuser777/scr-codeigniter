<?php

namespace App\Models;

use CodeIgniter\Database\BaseConnection;
use Exception;

class Event
{
    private int $id;
    private string $description;
    private string $date;
    private string $time;
    private string $order;
    private string $author;

    public function __construct(
        int $id = 0,
        string $description = "",
        string $date = "",
        string $time = "",
        string $order = "",
        string $author = "",
    )
    {
        $this->id = $id;
        $this->description = $description;
        $this->date = $date;
        $this->time = $time;
        $this->order = $order;
        $this->author = $author;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getTime(): string
    {
        return $this->time;
    }

    public function getOrder(): string
    {
        return $this->order;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function findOne(BaseConnection $conn, int $id): ?Event
    {
        if ($id <= 0) return null;

        $sql = "SELECT * FROM events WHERE evt_id = ?;";

        try
        {
            $row = $conn->query($sql, [$id])->getFirstRow("array");
            if ($row === null) return null;
            if ($row != null && count($row) == 0) return null;

            return new Event(
                $row["evt_id"],
                $row["evt_description"],
                $row["evt_date"],
                $row["evt_time"],
                $row["evt_order"],
                $row["evt_author"],
            );
        }
        catch (Exception $ex)
        {
            echo $ex->getMessage();
            return null;
        }
    }

    public function findAll(BaseConnection $conn): array
    {
        $sql = "SELECT * FROM events;";
        $events = [];

        try
        {
            $rows = $conn->query($sql);
            foreach ($rows->getResult("array") as $row)
            {
                $events[] = new Event(
                    $row["evt_id"],
                    $row["evt_description"],
                    $row["evt_date"],
                    $row["evt_time"],
                    $row["evt_order"],
                    $row["evt_author"],
                );
            }
        }
        catch (Exception $ex)
        {
            echo $ex->getMessage();
        }

        return $events;
    }

    public function find(BaseConnection $conn, string $key = "", string $date = "", int $orderType = 0): array
    {
        $events = [];
        $sql = "SELECT * FROM events";
        $params = [];
        if (strlen($key) > 0) 
        {
            $sql .= " WHERE evt_description LIKE ?";
            $params[] = "%" . $key . "%";
        }

        if (strlen($date) > 0) 
        {
            if (strlen($sql) == 20) $sql .= " WHERE ";
            else $sql .= " AND ";
            $sql .= "evt_date = ?";
            $params[] = $date;
        }

        // if (strlen($orderType) > 0) 
        // {
        //     if (strlen($sql) == 20) $sql .= " WHERE ";
        //     else $sql .= " AND ";
        //     $sql .= "evt_order_type = ?";
        //     $params[] = $orderType;
        // }

        $sql .= ";";

        try
        {
            $rows = $conn->query($sql, $params);
            foreach ($rows->getResult("array") as $row)
            {
                $events[] = new Event(
                    $row["evt_id"],
                    $row["evt_description"],
                    $row["evt_date"],
                    $row["evt_time"],
                    $row["evt_order"],
                    $row["evt_author"],
                );
            }
        }
        catch (Exception $ex)
        {
            echo $ex->getMessage();
        }

        return $events;
    }
}