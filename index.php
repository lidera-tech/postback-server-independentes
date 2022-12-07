<?php

require_once './request.php';

$data = array(
    "clickId" => "23423ver4r3t",
    "status" => "reject",
    "dateTime" => "12:00",
    "payout" => "12:00",
);

request($data, '123');