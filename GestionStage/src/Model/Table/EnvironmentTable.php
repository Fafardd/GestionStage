<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Environment Model
 *
 * @property \App\Model\Table\InternshipTable|\Cake\ORM\Association\HasMany $Internship
 *
 * @method \App\Model\Entity\Environment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Environment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Environment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Environment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Environment|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Environment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Environment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Environment findOrCreate($search, callable $callback = null, $options = [])
 */
class EnvironmentTable extends Table
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

        $this->setTable('environment');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Internship', [
            'foreignKey' => 'environment_id'
        ]);
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

        return $validator;
    }
}
