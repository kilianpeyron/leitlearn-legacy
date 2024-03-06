<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AuthenticationTokenTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AuthenticationTokenTable Test Case
 */
class AuthenticationTokenTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AuthenticationTokenTable
     */
    protected $AuthenticationToken;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.AuthenticationToken',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AuthenticationToken') ? [] : ['className' => AuthenticationTokenTable::class];
        $this->AuthenticationToken = $this->getTableLocator()->get('AuthenticationToken', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AuthenticationToken);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AuthenticationTokenTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
