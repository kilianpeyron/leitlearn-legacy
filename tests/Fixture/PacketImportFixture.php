<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PacketImportFixture
 */
class PacketImportFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'packet_import';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idPacketImporting' => 1,
                'idPacketImported' => 1,
            ],
        ];
        parent::init();
    }
}
