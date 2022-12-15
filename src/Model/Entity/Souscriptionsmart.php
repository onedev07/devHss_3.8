<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Souscriptionsmart Entity
 *
 * @property int $id
 * @property string|null $offresmart_id
 * @property string|null $client_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Offresmart $offresmart
 * @property \App\Model\Entity\Client $client
 */
class Souscriptionsmart extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'offresmart_id' => true,
        'client_id' => true,
        'created' => true,
        'modified' => true,
        'offresmart' => true,
        'client' => true,
    ];
}
