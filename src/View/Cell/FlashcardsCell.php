<?php
namespace App\View\Cell;

use Cake\View\Cell;

class FlashcardsCell extends Cell
{
    public function display(string $filter, int $logged_user_id = null)
    {
        $packets = 'c';

        $this->set('packets', $packets);
    }
}