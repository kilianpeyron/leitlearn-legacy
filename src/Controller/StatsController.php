<?php

namespace App\Controller;

use Cake\Core\Configure;
use App\Model\Table\PacketTable;

class StatsController extends AppController
{
    public function index()
    {
        $logged_user_id = $this->request->getSession()->read('Auth.id');
        $packetTable = $this->fetchTable('Packet');

        $filters = ['created', 'imported', 'ia'];
        $results = [];

        foreach ($filters as $filter) {
            $query = $this->fetchPacketsStats($packetTable, $filter, $logged_user_id);
            $results[$filter] = $query;
        }

        $user = $this->fetchUserInfos($logged_user_id);

        $this->set(compact('user', 'results'));
    }

    /**
     * Récupère les statistiques des paquets
     *
     * @param string $type Type de statistique
     * @param int $logged_user_id ID de l'utilisateur connecté
     * @return arrintay
     */
    public function fetchPacketsStats(PacketTable $packetTable, string $type, int $logged_user_id): int
    {
        switch ($type) {
            case 'created':
                $conditions = [
                    'creatorId' => $logged_user_id,
                    'ia' => 0
                ];
                break;
            case 'imported':
                $conditions = [
                    'creatorId !=' => $logged_user_id,
                    'ownerId' => $logged_user_id
                ];
                break;
            case 'ia':
                $conditions = [
                    'ownerID' => $logged_user_id,
                    'ia' => 1
                ];
                break;
            default:
                $conditions = [];
                break;
        }

        $paquets = $packetTable->find('all', [
            'conditions' => $conditions
        ]);

        $count = $paquets->count();
        return $count;
    }
}
