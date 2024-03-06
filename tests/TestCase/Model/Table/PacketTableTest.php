<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacketTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacketTable Test Case
 */
class PacketTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PacketTable
     */
    protected $Packet;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Packet',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Packet') ? [] : ['className' => PacketTable::class];
        $this->Packet = $this->getTableLocator()->get('Packet', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Packet);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PacketTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
