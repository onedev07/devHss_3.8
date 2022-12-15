<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paiementphysique Entity
 *
 * @property int $id
 * @property string $physclient_id
 * @property string $offre_id
 * @property string $periode_id
 * @property float $montant
 * @property \Cake\I18n\FrozenTime $date_debut
 * @property \Cake\I18n\FrozenTime $date_fin
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Physclient $physclient
 * @property \App\Model\Entity\Offre $offre
 * @property \App\Model\Entity\Periode $periode
 */
class Paiementphysique extends Entity
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
        'physclient_id' => true,
        'offre_id' => true,
        'periode_id' => true,
        'montant' => true,
        'date_debut' => true,
        'date_fin' => true,
        'created' => true,
        'modified' => true,
        'physclient' => true,
        'offre' => true,
        'periode' => true,
    ];
}
