<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Environments Model
 *
 * @property \App\Model\Table\InternshipsTable|\Cake\ORM\Association\BelongsToMany $Internships
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
class EnvironmentsTable extends Table
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

        $this->setTable('environments');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Internships', [
            'foreignKey' => 'environment_id',
            'targetForeignKey' => 'internship_id',
            'joinTable' => 'Internships_environments'
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
