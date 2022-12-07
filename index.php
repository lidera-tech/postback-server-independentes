<?php

require_once './request.php';

$keitaroRequest = (object) $_REQUEST;

$data = array(
    "clickId" => $keitaroRequest->clickId,
    "status" => $keitaroRequest->status,
    "payout" => $keitaroRequest->payout
);



while(true)
{

    if (!$keitaroRequest->clickId) break;
    if (request($data)) break;
    sleep(10);

}