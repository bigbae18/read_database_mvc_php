<?php

namespace App\Models;

use App\Database;

class Dates {
    private ?int $id;
    private string $date_people;
    private string $type;
    private string $activity;
    private string $date_time;

    private $db;
    private $table = "dates";

    public function __construct(int $id = null, string $date_people = '', string $type = '', string $activity = '', string $date_time = '') {
        if (!$this->db) {
            $this->db = new Database();
        }

        $this->id = $id;
        $this->date_people = $date_people;
        $this->type = $type;
        $this->activity = $activity;
        $this->date_time = $date_time;
    }

    public function all() {
        $query = $this->db->mysql->query("SELECT * FROM $this->table");
        $dates_array = $query->fetchAll();

        $result_list = [];

        foreach ($dates_array as $date) {
            $date_item = new Dates($date["id"], $date["date_people"], $date["type"], $date["activity"], $date["date_time"]);
            array_push($result_list, $date_item);            
        }

        return $result_list;
    }
    public function get_id() {
        return $this->id;
    }
    public function get_date_people() {
        return $this->date_people;
    }
    public function get_type() {
        return $this->type;
    }
    public function get_activity() {
        return $this->activity;
    }
    public function get_date_time() {
        return $this->date_time;
    }
}

?>