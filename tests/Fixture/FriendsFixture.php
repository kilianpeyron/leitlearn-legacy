<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FriendsFixture
 */
class FriendsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'requester_id' => 1,
                'recipient_id' => 1,
                'status' => 'Lorem ipsum dolor ',
                'created' => '2024-02-22 10:02:44',
                'modified' => '2024-02-22 10:02:44',
            ],
        ];
        parent::init();
    }
}
