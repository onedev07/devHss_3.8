<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Gpspayment Entity
 *
 * @property int $id
 * @property string|null $gpsoffre_id
 * @property string|null $client_id
 * @property string|null $periode_id
 * @property float|null $prixtotal
 * @property \Cake\I18n\FrozenTime|null $creadted
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Gpsoffre $gpsoffre
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Periode $periode
 */
class Gpspayment extends Entity
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
        'gpsoffre_id' => true,
        'client_id' => true,
        'periode_id' => true,
        'prixtotal' => true,
        'creadted' => true,
        'modified' => true,
        'gpsoffre' => true,
        'client' => true,
        'periode' => true,
    ];
}
