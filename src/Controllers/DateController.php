<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Dates;

class DateController {

    public function __construct() {
        $this->index();
    }
    public function index() {
        $date = new Dates();

        $dates = $date->all();

        new View("DateList", ["dates" => $dates]);
    }
}

?>