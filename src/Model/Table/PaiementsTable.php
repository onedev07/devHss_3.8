<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paiements Model
 *
 * @property \App\Model\Table\SouscriptionsTable&\Cake\ORM\Association\BelongsTo $Souscriptions
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\EtatpaiementsTable&\Cake\ORM\Association\BelongsTo $Etatpaiements
 *
 * @method \App\Model\Entity\Paiement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Paiement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Paiement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Paiement|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paiement saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paiement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Paiement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Paiement findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PaiementsTable extends Table
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

        $this->setTable('paiements');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Souscriptions', [
            'foreignKey' => 'souscription_id',
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Etatpaiements', [
            'foreignKey' => 'etatpaiement_id',
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
            //->requirePresence('refpay', 'create')
            ->allowEmptyString('refpay');

        $validator
            ->scalar('session')
            ->maxLength('session', 255)
            //->requirePresence('session', 'create')
            ->allowEmptyString('session');

        $validator
            ->scalar('payid')
            ->maxLength('payid', 255)
            //->requirePresence('payid', 'create')
            ->allowEmptyString('payid');

        $validator
            ->numeric('montant')
            //->requirePresence('montant', 'create')
            ->allowEmptyString('montant');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 13)
            //->requirePresence('tel', 'create')
            ->allowEmptyString('tel');

        $validator
            ->scalar('description')
            ->maxLength('description', 4294967295)
            //->requirePresence('description', 'create')
            ->allowEmptyString('description');

        $validator
            ->dateTime('datepay')
            //->requirePresence('datepay', 'create')
            ->allowEmptyDateTime('datepay');

        $validator
            ->dateTime('datefin')
            ->allowEmptyDateTime('datefin');

        $validator
            ->time('timepay')
            //->requirePresence('timepay', 'create')
            ->allowEmptyTime('timepay');

        $validator
            ->scalar('canal')
            ->maxLength('canal', 255)
            //->requirePresence('canal', 'create')
            ->allowEmptyString('canal');

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
        $rules->add($rules->existsIn(['souscription_id'], 'Souscriptions'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));
        //$rules->add($rules->existsIn(['etatpaiement_id'], 'Etatpaiements'));

        return $rules;
    }
}
