<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Devispaiement Entity
 *
 * @property int $id
 * @property string|null $devi_id
 * @property string|null $client_id
 * @property float|null $mttc
 * @property \Cake\I18n\FrozenTime|null $date
 * @property \Cake\I18n\FrozenTime|null $creadted
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Devi $devi
 * @property \App\Model\Entity\Client $client
 */
class Devispaiement extends Entity
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
        'devi_id' => true,
        'client_id' => true,
        'mttc' => true,
        'date' => true,
        'creadted' => true,
        'modified' => true,
        'devi' => true,
        'client' => true,
    ];
}
