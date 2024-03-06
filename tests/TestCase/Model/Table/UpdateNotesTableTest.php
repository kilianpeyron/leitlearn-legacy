<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UpdateNotesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UpdateNotesTable Test Case
 */
class UpdateNotesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UpdateNotesTable
     */
    protected $UpdateNotes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.UpdateNotes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UpdateNotes') ? [] : ['className' => UpdateNotesTable::class];
        $this->UpdateNotes = $this->getTableLocator()->get('UpdateNotes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UpdateNotes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UpdateNotesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
