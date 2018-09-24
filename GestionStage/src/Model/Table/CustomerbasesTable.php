<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customerbases Model
 *
 * @property \App\Model\Table\InternshipCustomerbaseTable|\Cake\ORM\Association\HasMany $InternshipCustomerbase
 *
 * @method \App\Model\Entity\Customerbase get($primaryKey, $options = [])
 * @method \App\Model\Entity\Customerbase newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Customerbase[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Customerbase|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customerbase|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customerbase patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Customerbase[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Customerbase findOrCreate($search, callable $callback = null, $options = [])
 */
class CustomerbasesTable extends Table
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

        $this->setTable('customerbases');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('InternshipCustomerbase', [
            'foreignKey' => 'customerbase_id'
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
