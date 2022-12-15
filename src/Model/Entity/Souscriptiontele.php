<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Souscriptiontele Entity
 *
 * @property int $id
 * @property string|null $offretele_id
 * @property string|null $client_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Offretele $offretele
 * @property \App\Model\Entity\Client $client
 */
class Souscriptiontele extends Entity
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
        'offretele_id' => true,
        'client_id' => true,
        'created' => true,
        'modified' => true,
        'offretele' => true,
        'client' => true,
    ];
}
