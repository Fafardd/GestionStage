<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coordonator Model
 *
 * @method \App\Model\Entity\Coordonator get($primaryKey, $options = [])
 * @method \App\Model\Entity\Coordonator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Coordonator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Coordonator|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coordonator|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coordonator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Coordonator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Coordonator findOrCreate($search, callable $callback = null, $options = [])
 */
class CoordonatorTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('coordonator');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('place')
            ->maxLength('place', 255)
            ->requirePresence('place', 'create')
            ->notEmpty('place');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->scalar('province')
            ->maxLength('province', 255)
            ->requirePresence('province', 'create')
            ->notEmpty('province');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 10)
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->scalar('job')
            ->maxLength('job', 255)
            ->requirePresence('job', 'create')
            ->notEmpty('job');

        $validator
            ->scalar('fax')
            ->maxLength('fax', 10)
            ->requirePresence('fax', 'create')
            ->notEmpty('fax');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
