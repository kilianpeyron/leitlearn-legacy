<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacketsKeywordsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacketsKeywordsTable Test Case
 */
class PacketsKeywordsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PacketsKeywordsTable
     */
    protected $PacketsKeywords;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.PacketsKeywords',
        'app.Packets',
        'app.Keywords',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PacketsKeywords') ? [] : ['className' => PacketsKeywordsTable::class];
        $this->PacketsKeywords = $this->getTableLocator()->get('PacketsKeywords', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PacketsKeywords);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PacketsKeywordsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
