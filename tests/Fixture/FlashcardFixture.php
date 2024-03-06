<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FlashcardFixture
 */
class FlashcardFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'flashcard';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idFlashCard' => 1,
                'idPacket' => 1,
                'question' => 'Lorem ipsum dolor sit amet',
                'answer' => 'Lorem ipsum dolor sit amet',
                'image' => 'Lorem ipsum dolor sit amet',
                'leitnerFolder' => 1,
                'modified' => '2024-02-07 10:29:50',
            ],
        ];
        parent::init();
    }
}
