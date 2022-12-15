<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Offreteles Model
 *
 * @property \App\Model\Table\ElementtelesTable&\Cake\ORM\Association\HasMany $Elementteles
 * @property \App\Model\Table\SouscriptiontelesTable&\Cake\ORM\Association\HasMany $Souscriptionteles
 *
 * @method \App\Model\Entity\Offretele get($primaryKey, $options = [])
 * @method \App\Model\Entity\Offretele newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Offretele[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Offretele|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Offretele saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Offretele patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Offretele[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Offretele findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OffretelesTable extends Table
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

        $this->setTable('offreteles');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Elementteles', [
            'foreignKey' => 'offretele_id',
        ]);
        $this->hasMany('Souscriptionteles', [
            'foreignKey' => 'offretele_id',
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        $validator
            ->scalar('prix')
            ->maxLength('prix', 45)
            ->allowEmptyString('prix');

        $validator
            ->scalar('description')
            ->maxLength('description', 4294967295)
            ->allowEmptyString('description');

        return $validator;
    }
}
