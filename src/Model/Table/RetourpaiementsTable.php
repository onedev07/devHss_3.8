<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Retourpaiements Model
 *
 * @property \App\Model\Table\DevisTable&\Cake\ORM\Association\BelongsTo $Devis
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 *
 * @method \App\Model\Entity\Retourpaiement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Retourpaiement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Retourpaiement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Retourpaiement|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Retourpaiement saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Retourpaiement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Retourpaiement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Retourpaiement findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RetourpaiementsTable extends Table
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

        $this->setTable('retourpaiements');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Devis', [
            'foreignKey' => 'devi_id',
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER',
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
            ->allowEmptyString('id', null, 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('refpay')
            ->maxLength('refpay', 255)
            ->requirePresence('refpay', 'create')
            ->notEmptyString('refpay');

        $validator
            ->scalar('session')
            ->maxLength('session', 255)
            ->requirePresence('session', 'create')
            ->notEmptyString('session');

        $validator
            ->scalar('payid')
            ->maxLength('payid', 255)
            ->requirePresence('payid', 'create')
            ->notEmptyString('payid');

        $validator
            ->numeric('montant')
            ->requirePresence('montant', 'create')
            ->notEmptyString('montant');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 13)
            ->requirePresence('tel', 'create')
            ->notEmptyString('tel');

        $validator
            ->scalar('description')
            ->maxLength('description', 4294967295)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->dateTime('datepay')
            ->requirePresence('datepay', 'create')
            ->notEmptyDateTime('datepay');

        $validator
            ->dateTime('datefin')
            ->allowEmptyDateTime('datefin');

        $validator
            ->time('timepay')
            ->requirePresence('timepay', 'create')
            ->notEmptyTime('timepay');

        $validator
            ->scalar('canal')
            ->maxLength('canal', 255)
            ->requirePresence('canal', 'create')
            ->notEmptyString('canal');

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
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->existsIn(['devi_id'], 'Devis'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }
}
