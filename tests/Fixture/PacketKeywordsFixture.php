<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PacketKeywordsFixture
 */
class PacketKeywordsFixture extends TestFixture
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
                'packet_id' => 1,
                'keyword_id' => 1,
            ],
        ];
        parent::init();
    }
}
