<?php

namespace App\Controller;

use App\Model\Table\UserTable;
use App\Model\Table\PacketTable;

class AdminController extends AppController
{
    public function index()
    {
        $paquets = $this->fetchTable('Packet')->find('all');
        $users = $this->fetchTable('User')->find('all');

        $this->set(compact('users', 'paquets'));
    }
}
