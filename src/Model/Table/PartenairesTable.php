<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Partenaires Model
 *
 * @method \App\Model\Entity\Partenaire get($primaryKey, $options = [])
 * @method \App\Model\Entity\Partenaire newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Partenaire[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Partenaire|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Partenaire saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Partenaire patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Partenaire[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Partenaire findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PartenairesTable extends Table
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

        $this->setTable('partenaires');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'codepartenaire']);

        $this->addBehavior('Timestamp');
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
            ->scalar('codepartenaire')
            ->maxLength('codepartenaire', 45)
            ->allowEmptyString('codepartenaire', null, 'create')
            ->add('codepartenaire', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('raisonsociale')
            ->maxLength('raisonsociale', 45)
            ->allowEmptyString('raisonsociale');

        $validator
            ->scalar('password')
            ->maxLength('password', 45)
            ->allowEmptyString('password');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 13)
            ->allowEmptyString('tel');

        $validator
            ->scalar('cel')
            ->maxLength('cel', 13)
            ->allowEmptyString('cel');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('bp')
            ->maxLength('bp', 45)
            ->allowEmptyString('bp');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 45)
            ->allowEmptyString('adresse');

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
        $rules->add($rules->isUnique(['codepartenaire']));

        return $rules;
    }
}
