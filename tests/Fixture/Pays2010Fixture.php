<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Pays2010Fixture
 */
class Pays2010Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'pays2010';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'CODE_PAYS' => '',
                'NOM_PAYS' => 'Lorem ipsum dolor sit amet',
                'NOM_CONTINENT' => 'Lorem ipsum dolor sit amet',
                'SURFACE' => 1,
                'POPULATION' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'ESPERANCE' => 1,
                'PNB' => 1,
                'NOM_CHEF_ETAT' => 'Lorem ipsum dolor sit amet',
                'ID_CAPITALE' => 1,
            ],
        ];
        parent::init();
    }
}
