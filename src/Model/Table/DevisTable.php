<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Devis Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\OffresTable&\Cake\ORM\Association\BelongsTo $Offres
 * @property \App\Model\Table\MaterielinclusesTable&\Cake\ORM\Association\BelongsTo $Materielincluses
 * @property \App\Model\Table\ServiceinclusesTable&\Cake\ORM\Association\BelongsTo $Serviceincluses
 * @property \App\Model\Table\PeriodesTable&\Cake\ORM\Association\BelongsTo $Periodes
 * @property \App\Model\Table\EtatsTable&\Cake\ORM\Association\BelongsTo $Etats
 *
 * @method \App\Model\Entity\Devi get($primaryKey, $options = [])
 * @method \App\Model\Entity\Devi newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Devi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Devi|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Devi saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Devi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Devi[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Devi findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DevisTable extends Table
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

        $this->setTable('devis');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'codedevis']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
        ]);
        $this->belongsTo('Offres', [
            'foreignKey' => 'offre_id',
        ]);
        $this->belongsTo('Materielincluses', [
            'foreignKey' => 'materielinclus_id',
        ]);
        $this->belongsTo('Serviceincluses', [
            'foreignKey' => 'serviceinclus_id',
        ]);
        $this->belongsTo('Periodes', [
            'foreignKey' => 'periode_id',
        ]);
        $this->belongsTo('Etats', [
            'foreignKey' => 'etat_id',
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
            ->scalar('codedevis')
            ->maxLength('codedevis', 45)
            ->allowEmptyString('codedevis', null, 'create')
            ->add('codedevis', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('montanttotal')
            ->maxLength('montanttotal', 45)
            ->allowEmptyString('montanttotal');

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
        $rules->add($rules->isUnique(['codedevis']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));
        $rules->add($rules->existsIn(['offre_id'], 'Offres'));
        $rules->add($rules->existsIn(['materielinclus_id'], 'Materielincluses'));
        $rules->add($rules->existsIn(['serviceinclus_id'], 'Serviceincluses'));
        $rules->add($rules->existsIn(['periode_id'], 'Periodes'));
        $rules->add($rules->existsIn(['etat_id'], 'Etats'));

        return $rules;
    }
}
