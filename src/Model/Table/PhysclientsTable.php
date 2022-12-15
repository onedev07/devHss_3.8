<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Physclients Model
 *
 * @property \App\Model\Table\PaiementphysiquesTable&\Cake\ORM\Association\HasMany $Paiementphysiques
 *
 * @method \App\Model\Entity\Physclient get($primaryKey, $options = [])
 * @method \App\Model\Entity\Physclient newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Physclient[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Physclient|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Physclient saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Physclient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Physclient[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Physclient findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PhysclientsTable extends Table
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

        $this->setTable('physclients');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Paiementphysiques', [
            'foreignKey' => 'physclient_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('prenoms')
            ->maxLength('prenoms', 255)
            //->requirePresence('prenoms', 'create')
            //->notEmptyString('prenoms');
			->allowEmptyString('prenoms');

        $validator
            ->email('email')
            //->requirePresence('email', 'create')
            //->notEmptyString('email');
			->allowEmptyString('email');

        $validator
            ->scalar('cel')
            ->maxLength('cel', 13)
            ->requirePresence('cel', 'create')
            ->notEmptyString('cel');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 13)
            //->requirePresence('tel', 'create')
            //->notEmptyString('tel');
			->allowEmptyString('tel');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 4294967295)
            //->requirePresence('adresse', 'create')
            //->notEmptyString('adresse');
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
        //$rules->add($rules->isUnique(['email']));
		$rules->add($rules->isUnique(['id']));

        return $rules;
    }
}
