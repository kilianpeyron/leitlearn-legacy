<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PacketsFixture
 */
class PacketsFixture extends TestFixture
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
                'packet_uid' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-03-16 20:14:49',
                'importation_count' => 1,
                'public' => 1,
                'ia' => 1,
                'user_id' => 1,
                'creator_id' => 1,
                'modified' => '2024-03-16 20:14:49',
            ],
        ];
        parent::init();
    }
}
