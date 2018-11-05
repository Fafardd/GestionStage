<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InternshipEnvironment Model
 *
 * @property \App\Model\Table\InternshipsTable|\Cake\ORM\Association\BelongsTo $Internships
 * @property \App\Model\Table\EnvironmentsTable|\Cake\ORM\Association\BelongsTo $Environments
 *
 * @method \App\Model\Entity\InternshipEnvironment get($primaryKey, $options = [])
 * @method \App\Model\Entity\InternshipEnvironment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InternshipEnvironment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InternshipEnvironment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InternshipEnvironment|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InternshipEnvironment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InternshipEnvironment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InternshipEnvironment findOrCreate($search, callable $callback = null, $options = [])
 */
class InternshipEnvironmentTable extends Table
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

        $this->setTable('internship_environment');
        $this->setDisplayField('internship_id');
        $this->setPrimaryKey(['internship_id', 'environment_id']);

        $this->belongsTo('Internships', [
            'foreignKey' => 'internship_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Environments', [
            'foreignKey' => 'environment_id',
            'joinType' => 'INNER'
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
        $rules->add($rules->existsIn(['internship_id'], 'Internships'));
        $rules->add($rules->existsIn(['environment_id'], 'Environments'));

        return $rules;
    }
}
