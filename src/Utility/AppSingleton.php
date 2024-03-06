<?php

namespace App\Utility;

use App\Model\Table\UserTable;
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;

class AppSingleton
{
    private static $instance;

    private function __construct()
    {
        // Empêche l'instanciation directe depuis l'extérieur
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function getUser($session)
    {
        $loggedUserUID = $session->read('Auth.user_uid');

        if ($loggedUserUID !== null) {
            $userTable = TableRegistry::getTableLocator()->get('Users');
            $user = $userTable->find('all')->where(['user_uid' => $loggedUserUID])->first();

            if ($user) {
                return $user;
            }
        }

        return null;
    }
}
