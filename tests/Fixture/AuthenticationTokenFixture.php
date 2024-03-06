<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AuthenticationTokenFixture
 */
class AuthenticationTokenFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'authentication_token';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'TokenID' => 1,
                'UserID' => 1,
                'Token' => 'Lorem ipsum dolor sit amet',
                'IP' => 'Lorem ipsum dolor sit amet',
                'ExpirationDate' => 1,
            ],
        ];
        parent::init();
    }
}
