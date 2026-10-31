<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;


class HomeController extends BaseController
{
    /**
     * Všetky akcie sú dostupné všetkým používateľom.
     */
    public function authorize(Request $request, string $action): bool
    {
        return true;
    }

    /**
     * Úvodná stránka – zobrazí pohľad App/Views/Home/index.view.php a este
     */
    public function index(Request $request): Response
    {
        return $this->html();
    }
}
