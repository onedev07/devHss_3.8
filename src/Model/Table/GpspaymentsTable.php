<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gpspayments Model
 *
 * @property \App\Model\Table\GpsoffresTable&\Cake\ORM\Association\BelongsTo $Gpsoffres
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\PeriodesTable&\Cake\ORM\Association\BelongsTo $Periodes
 *
 * @method \App\Model\Entity\Gpspayment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gpspayment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gpspayment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gpspayment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gpspayment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gpspayment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gpspayment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gpspayment findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GpspaymentsTable extends Table
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

        $this->setTable('gpspayments');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Gpsoffres', [
            'foreignKey' => 'gpsoffre_id',
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
        ]);
        $this->belongsTo('Periodes', [
            'foreignKey' => 'periode_id',
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
            ->numeric('prixtotal')
            ->allowEmptyString('prixtotal');

        $validator
            ->dateTime('creadted')
            ->allowEmptyDateTime('creadted');

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
        $rules->add($rules->existsIn(['gpsoffre_id'], 'Gpsoffres'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));
        $rules->add($rules->existsIn(['periode_id'], 'Periodes'));

        return $rules;
    }
}
