<?php
declare(strict_types=1);

namespace App\Controller;

use App\Utility\AppSingleton;
class DashboardController extends AppController
{
    public function index()
    {
        $dashboard_sidebar_title = 'Mon dashboard';

        $this->set(compact('dashboard_sidebar_title'));
    }
}
