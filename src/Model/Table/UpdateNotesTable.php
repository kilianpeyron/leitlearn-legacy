<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UpdateNotes Model
 *
 * @method \App\Model\Entity\UpdateNote newEmptyEntity()
 * @method \App\Model\Entity\UpdateNote newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\UpdateNote> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UpdateNote get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\UpdateNote findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\UpdateNote patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\UpdateNote> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UpdateNote|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\UpdateNote saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\UpdateNote>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UpdateNote>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\UpdateNote>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UpdateNote> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\UpdateNote>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UpdateNote>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\UpdateNote>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UpdateNote> deleteManyOrFail(iterable $entities, array $options = [])
 */
class UpdateNotesTable extends Table
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

        $this->setTable('update_notes');
        $this->setDisplayField('Version');
        $this->setPrimaryKey('UpdateID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('Version')
            ->maxLength('Version', 10)
            ->requirePresence('Version', 'create')
            ->notEmptyString('Version');

        $validator
            ->scalar('Content')
            ->requirePresence('Content', 'create')
            ->notEmptyString('Content');

        $validator
            ->scalar('Fixes')
            ->requirePresence('Fixes', 'create')
            ->notEmptyString('Fixes');

        return $validator;
    }
}
