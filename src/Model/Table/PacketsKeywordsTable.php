<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PacketsKeywords Model
 *
 * @property \App\Model\Table\PacketsTable&\Cake\ORM\Association\BelongsTo $Packets
 * @property \App\Model\Table\KeywordsTable&\Cake\ORM\Association\BelongsTo $Keywords
 *
 * @method \App\Model\Entity\PacketsKeyword newEmptyEntity()
 * @method \App\Model\Entity\PacketsKeyword newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\PacketsKeyword> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PacketsKeyword get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\PacketsKeyword findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\PacketsKeyword patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\PacketsKeyword> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PacketsKeyword|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\PacketsKeyword saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\PacketsKeyword>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PacketsKeyword>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PacketsKeyword>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PacketsKeyword> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PacketsKeyword>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PacketsKeyword>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PacketsKeyword>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PacketsKeyword> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PacketsKeywordsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('packets_keywords');
        $this->setDisplayField(['packet_id', 'keyword_id']);
        $this->setPrimaryKey(['packet_id', 'keyword_id']);

        $this->belongsTo('Packets', [
            'foreignKey' => 'packet_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Keywords', [
            'foreignKey' => 'keyword_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['packet_id'], 'Packets'), ['errorField' => 'packet_id']);
        $rules->add($rules->existsIn(['keyword_id'], 'Keywords'), ['errorField' => 'keyword_id']);

        return $rules;
    }
}
