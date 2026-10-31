<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class RecordController extends BaseController
{
    /**
     * Katalóg zatiaľ nie je implementovaný, preto presmeruje na ukážkový detail platne.
     */
    public function index(Request $request): Response
    {
        return $this->redirect($this->url('record.detail'));
    }

    /**
     * Detail platne – zobrazí pohľad App/Views/Record/detail.view.php
     * Obsah je zatiaľ statický, neskôr sa načíta z databázy.
     */
    public function detail(Request $request): Response
    {
        return $this->html();
    }
}
