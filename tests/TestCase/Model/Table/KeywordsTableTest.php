<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KeywordsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KeywordsTable Test Case
 */
class KeywordsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KeywordsTable
     */
    protected $Keywords;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Keywords',
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
        $config = $this->getTableLocator()->exists('Keywords') ? [] : ['className' => KeywordsTable::class];
        $this->Keywords = $this->getTableLocator()->get('Keywords', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Keywords);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\KeywordsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
