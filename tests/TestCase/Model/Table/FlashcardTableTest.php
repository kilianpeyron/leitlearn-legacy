<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlashcardTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlashcardTable Test Case
 */
class FlashcardTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FlashcardTable
     */
    protected $Flashcard;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Flashcard',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Flashcard') ? [] : ['className' => FlashcardTable::class];
        $this->Flashcard = $this->getTableLocator()->get('Flashcard', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Flashcard);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FlashcardTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
