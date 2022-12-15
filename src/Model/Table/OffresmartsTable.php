<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Offresmarts Model
 *
 * @property \App\Model\Table\ElementsmartsTable&\Cake\ORM\Association\HasMany $Elementsmarts
 * @property \App\Model\Table\SouscriptionsmartsTable&\Cake\ORM\Association\HasMany $Souscriptionsmarts
 *
 * @method \App\Model\Entity\Offresmart get($primaryKey, $options = [])
 * @method \App\Model\Entity\Offresmart newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Offresmart[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Offresmart|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Offresmart saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Offresmart patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Offresmart[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Offresmart findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OffresmartsTable extends Table
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

        $this->setTable('offresmarts');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Elementsmarts', [
            'foreignKey' => 'offresmart_id',
        ]);
        $this->hasMany('Souscriptionsmarts', [
            'foreignKey' => 'offresmart_id',
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
