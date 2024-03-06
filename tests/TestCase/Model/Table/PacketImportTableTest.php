<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacketImportTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacketImportTable Test Case
 */
class PacketImportTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PacketImportTable
     */
    protected $PacketImport;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.PacketImport',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PacketImport') ? [] : ['className' => PacketImportTable::class];
        $this->PacketImport = $this->getTableLocator()->get('PacketImport', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PacketImport);

        parent::tearDown();
    }
}
