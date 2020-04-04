<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function subtitle() {
    return  'Mały panel do robienia wielkich rzeczy';
}

function assetsUrl() {
    return  base_url('assets/admin/');
}

function apiUrl() {
    return  'http://api.looko2.com/?method=GPSGetClosestLooko&lat=50.012054&lon=20.116871&token=1570445090';
}