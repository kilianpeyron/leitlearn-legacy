<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacketKeywordsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacketKeywordsTable Test Case
 */
class PacketKeywordsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PacketKeywordsTable
     */
    protected $PacketKeywords;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.PacketKeywords',
        'app.Packets',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PacketKeywords') ? [] : ['className' => PacketKeywordsTable::class];
        $this->PacketKeywords = $this->getTableLocator()->get('PacketKeywords', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PacketKeywords);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PacketKeywordsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PacketKeywordsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
