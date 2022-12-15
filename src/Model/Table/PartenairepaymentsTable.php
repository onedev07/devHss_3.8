<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Partenairepayments Model
 *
 * @property \App\Model\Table\OffresTable&\Cake\ORM\Association\BelongsTo $Offres
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\PartenairesTable&\Cake\ORM\Association\BelongsTo $Partenaires
 * @property \App\Model\Table\PerioedsTable&\Cake\ORM\Association\BelongsTo $Perioeds
 *
 * @method \App\Model\Entity\Partenairepayment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Partenairepayment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Partenairepayment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Partenairepayment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Partenairepayment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Partenairepayment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Partenairepayment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Partenairepayment findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PartenairepaymentsTable extends Table
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

        $this->setTable('partenairepayments');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Offres', [
            'foreignKey' => 'offre_id',
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
        ]);
        $this->belongsTo('Partenaires', [
            'foreignKey' => 'partenaire_id',
        ]);
        $this->belongsTo('Perioeds', [
            'foreignKey' => 'perioed_id',
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
            ->scalar('prixtotal')
            ->maxLength('prixtotal', 45)
            ->allowEmptyString('prixtotal');

        $validator
            ->dateTime('datedebut')
            ->allowEmptyDateTime('datedebut');

        $validator
            ->dateTime('datefin')
            ->allowEmptyDateTime('datefin');

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
        $rules->add($rules->existsIn(['offre_id'], 'Offres'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));
        $rules->add($rules->existsIn(['partenaire_id'], 'Partenaires'));
        $rules->add($rules->existsIn(['perioed_id'], 'Perioeds'));

        return $rules;
    }
}
