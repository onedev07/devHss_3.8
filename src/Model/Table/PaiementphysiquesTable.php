<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paiementphysiques Model
 *
 * @property \App\Model\Table\PhysclientsTable&\Cake\ORM\Association\BelongsTo $Physclients
 * @property \App\Model\Table\OffresTable&\Cake\ORM\Association\BelongsTo $Offres
 * @property \App\Model\Table\PeriodesTable&\Cake\ORM\Association\BelongsTo $Periodes
 *
 * @method \App\Model\Entity\Paiementphysique get($primaryKey, $options = [])
 * @method \App\Model\Entity\Paiementphysique newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Paiementphysique[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Paiementphysique|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paiementphysique saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paiementphysique patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Paiementphysique[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Paiementphysique findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PaiementphysiquesTable extends Table
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

        $this->setTable('paiementphysiques');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Physclients', [
            'foreignKey' => 'physclient_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Offres', [
            'foreignKey' => 'offre_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Periodes', [
            'foreignKey' => 'periode_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->numeric('montant')
            ->requirePresence('montant', 'create')
            ->notEmptyString('montant');

        $validator
            ->dateTime('date_debut')
            //->requirePresence('date_debut', 'create')
            //->notEmptyDateTime('date_debut');
			->allowEmptyString('date_debut');

        $validator
            ->dateTime('date_fin')
            //->requirePresence('date_fin', 'create')
            //->notEmptyDateTime('date_fin');
			->allowEmptyString('date_fin');

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
        $rules->add($rules->existsIn(['physclient_id'], 'Physclients'));
        $rules->add($rules->existsIn(['offre_id'], 'Offres'));
        $rules->add($rules->existsIn(['periode_id'], 'Periodes'));

        return $rules;
    }
}
