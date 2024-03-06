<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FlashcardsFixture
 */
class FlashcardsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'packet_id' => 1,
                'question' => 'Lorem ipsum dolor sit amet',
                'answer' => 'Lorem ipsum dolor sit amet',
                'media' => 'Lorem ipsum dolor sit amet',
                'leitnerFolder' => 1,
                'modified' => '2024-02-22 10:02:44',
            ],
        ];
        parent::init();
    }
}
