<?php

// This script calls all the read-only endpoints in the API.

require('../vendor/autoload.php');

$client = new Luno\Client();
$client->setAuth(getenv("LUNO_API_KEY_ID"), getenv("LUNO_API_KEY_SECRET"));

$req = new Luno\Request\GetTickers;
$res = $client->GetTickers($req);
print_r($res);
usleep(500000);

$req = new Luno\Request\GetTicker;
$req->setPair("XBTZAR");
$res = $client->GetTicker($req);
print_r($res);
usleep(500000);

$req = new Luno\Request\GetOrderBook;
$req->setPair("XBTZAR");
$res = $client->GetOrderBook($req);
print_r($res);
usleep(500000);

$req = new Luno\Request\ListTrades;
$req->setPair("XBTZAR");
$req->setSince(strtotime("yesterday")*1000);
$res = $client->ListTrades($req);
print_r($res);
usleep(500000);

$req = new Luno\Request\GetBalances;
$res = $client->GetBalances($req);
print_r($res);
usleep(500000);

$aid = 0;
if (count($res->getBalance()) > 0) {
  $aid = $res->getBalance()[0]->getAccountId();
}

if ($aid > 0) {
  $req = new Luno\Request\ListTransactions;
  $req->setId($aid);
  $req->setMinRow(1);
  $req->setMaxRow(1000);
  $res = $client->ListTransactions($req);
  print_r($res);
  usleep(500000);
}

if ($aid > 0) {
  $req = new Luno\Request\ListPendingTransactions;
  $req->setId($aid);
  $res = $client->ListPendingTransactions($req);
  print_r($res);
  usleep(500000);
}

$req = new Luno\Request\ListOrders;
$res = $client->ListOrders($req);
print_r($res);
usleep(500000);

$req = new Luno\Request\ListUserTrades;
$req->setPair("XBTZAR");
$res = $client->ListUserTrades($req);
print_r($res);
usleep(500000);

$req = new Luno\Request\GetFeeInfo;
$res = $client->GetFeeInfo($req);
print_r($res);
usleep(500000);

$req = new Luno\Request\GetFundingAddress;
$req->setAsset("XBT");
$res = $client->GetFundingAddress($req);
print_r($res);
usleep(500000);

$req = new Luno\Request\ListWithdrawals;
$res = $client->ListWithdrawals($req);
print_r($res);
usleep(500000);

$wid = 0;
if (count($res->GetWithdrawals()) > 0) {
  $wid = $res->GetWithdrawals()[0]->getId();
}

if ($wid > 0) {
  $req = new Luno\Request\GetWithdrawal;
  $req->setId($wid);
  $res = $client->GetWithdrawal($req);
  print_r($res);
  usleep(500000);
}
