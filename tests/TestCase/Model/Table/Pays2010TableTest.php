<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Pays2010Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Pays2010Table Test Case
 */
class Pays2010TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Pays2010Table
     */
    protected $Pays2010;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Pays2010',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pays2010') ? [] : ['className' => Pays2010Table::class];
        $this->Pays2010 = $this->getTableLocator()->get('Pays2010', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pays2010);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Pays2010Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
