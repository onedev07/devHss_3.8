<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clients Model
 *
 * @property \App\Model\Table\OffresTable&\Cake\ORM\Association\BelongsTo $Offres
 * @property \App\Model\Table\CommentairesTable&\Cake\ORM\Association\HasMany $Commentaires
 * @property \App\Model\Table\PaiementsTable&\Cake\ORM\Association\HasMany $Paiements
 * @property \App\Model\Table\SouscriptionsTable&\Cake\ORM\Association\HasMany $Souscriptions
 *
 * @method \App\Model\Entity\Client get($primaryKey, $options = [])
 * @method \App\Model\Entity\Client newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Client[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Client|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Client[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Client findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClientsTable extends Table
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

        $this->setTable('clients');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Offres', [
            'foreignKey' => 'offre_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Commentaires', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Paiements', [
            'foreignKey' => 'client_id',
        ]);
       /*  $this->hasMany('Souscriptions', [
            'foreignKey' => 'client_id',
        ]); */
        $this->hasMany('Demandes', [
            'foreignKey' => 'client_id',
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
            ->maxLength('name', 255)
            // ->allowEmptyString('name');
            ->notEmptyString('name');

        $validator
            ->email('email')
            // ->allowEmptyString('email');
            ->notEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            // ->allowEmptyString('password');
            ->notEmptyString('password');

        $validator
            ->scalar('cel')
            ->maxLength('cel', 10)
            ->allowEmptyString('cel');
            //->notEmptyString('cel');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 10)
            ->allowEmptyString('tel');

        $validator
            ->scalar('web')
            ->maxLength('web', 45)
            ->allowEmptyString('web');

        $validator
            ->scalar('bp')
            ->maxLength('bp', 45)
            ->allowEmptyString('bp');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 45)
            ->allowEmptyString('adresse');

        $validator
            ->scalar('localisation_site')
            ->maxLength('localisation_site', 4294967295)
            ->allowEmptyString('localisation_site');
            //->notEmptyString('localisation_site');

        return $validator;
    }

    public function validationLogin(Validator $validator)
    {
        $validator
            // User email
            ->add('email', 'valid', [
                'rule' => 'email',
                'message' => 'Entrez une adresse email valide svp.'
            ])

            //User password validation
            ->notEmptyString('password');

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
        $rules->add($rules->existsIn(['offre_id'], 'Offres'));

        return $rules;
    }
}
