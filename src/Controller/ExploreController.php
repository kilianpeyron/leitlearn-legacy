<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

class ExploreController extends AppController
{
    public function index()
    {
        $dashboard_sidebar_title = 'Explorez';

        $this->set(compact('dashboard_sidebar_title'));
    }
}
