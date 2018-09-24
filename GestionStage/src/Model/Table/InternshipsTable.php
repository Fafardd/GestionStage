<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Internships Model
 *
 * @property \App\Model\Table\CompaniesTable|\Cake\ORM\Association\BelongsTo $Companies
 * @property \App\Model\Table\TypesTable|\Cake\ORM\Association\BelongsTo $Types
 * @property \App\Model\Table\InternshipCustomerbaseTable|\Cake\ORM\Association\HasMany $InternshipCustomerbase
 * @property \App\Model\Table\InternshipEnvironmentTable|\Cake\ORM\Association\HasMany $InternshipEnvironment
 * @property \App\Model\Table\InternshipStudentTable|\Cake\ORM\Association\HasMany $InternshipStudent
 *
 * @method \App\Model\Entity\Internship get($primaryKey, $options = [])
 * @method \App\Model\Entity\Internship newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Internship[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Internship|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Internship|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Internship patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Internship[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Internship findOrCreate($search, callable $callback = null, $options = [])
 */
class InternshipsTable extends Table
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

        $this->setTable('internships');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Types', [
            'foreignKey' => 'type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('InternshipCustomerbase', [
            'foreignKey' => 'internship_id'
        ]);
        $this->hasMany('InternshipEnvironment', [
            'foreignKey' => 'internship_id'
        ]);
        $this->hasMany('InternshipStudent', [
            'foreignKey' => 'internship_id'
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
            ->scalar('period')
            ->maxLength('period', 255)
            ->requirePresence('period', 'create')
            ->notEmpty('period');

        $validator
            ->date('date_start')
            ->requirePresence('date_start', 'create')
            ->notEmpty('date_start');

        $validator
            ->date('date_end')
            ->requirePresence('date_end', 'create')
            ->notEmpty('date_end');

        $validator
            ->integer('hours')
            ->requirePresence('hours', 'create')
            ->notEmpty('hours');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('stage_details')
            ->maxLength('stage_details', 255)
            ->requirePresence('stage_details', 'create')
            ->notEmpty('stage_details');

        $validator
            ->requirePresence('active', 'create')
            ->notEmpty('active');

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
        $rules->add($rules->existsIn(['company_id'], 'Companies'));
        $rules->add($rules->existsIn(['type_id'], 'Types'));

        return $rules;
    }
}
