<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PacketFixture
 */
class PacketFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'packet';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idPacket' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'thumbnail' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-02-07 10:29:52',
                'link' => 'Lorem ipsum dolor sit amet',
                'importationCount' => 1,
                'public' => 1,
                'ia' => 1,
                'ownerId' => 1,
                'creatorId' => 1,
                'modified' => '2024-02-07 10:29:52',
                'state' => 1,
            ],
        ];
        parent::init();
    }
}
