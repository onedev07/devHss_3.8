<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gpsoffres Model
 *
 * @property \App\Model\Table\GpspaymentsTable&\Cake\ORM\Association\HasMany $Gpspayments
 * @property \App\Model\Table\GpsretourpaiementsTable&\Cake\ORM\Association\HasMany $Gpsretourpaiements
 *
 * @method \App\Model\Entity\Gpsoffre get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gpsoffre newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gpsoffre[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gpsoffre|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gpsoffre saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gpsoffre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gpsoffre[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gpsoffre findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GpsoffresTable extends Table
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

        $this->setTable('gpsoffres');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Gpspayments', [
            'foreignKey' => 'gpsoffre_id',
        ]);
        $this->hasMany('Gpsretourpaiements', [
            'foreignKey' => 'gpsoffre_id',
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
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        $validator
            ->numeric('prix')
            ->allowEmptyString('prix');

        $validator
            ->scalar('description')
            ->maxLength('description', 4294967295)
            ->allowEmptyString('description');

        return $validator;
    }
}
