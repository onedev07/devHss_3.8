<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Gpsretourpaiement Entity
 *
 * @property int $id
 * @property string $refpay
 * @property string $session
 * @property string $payid
 * @property string|null $gpsoffre_id
 * @property string $client_id
 * @property float $montant
 * @property string $tel
 * @property string $description
 * @property \Cake\I18n\FrozenTime $datepay
 * @property \Cake\I18n\FrozenTime|null $datefin
 * @property \Cake\I18n\FrozenTime $timepay
 * @property string $canal
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Gpsoffre $gpsoffre
 * @property \App\Model\Entity\Client $client
 */
class Gpsretourpaiement extends Entity
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
        'refpay' => true,
        'session' => true,
        'payid' => true,
        'gpsoffre_id' => true,
        'client_id' => true,
        'montant' => true,
        'tel' => true,
        'description' => true,
        'datepay' => true,
        'datefin' => true,
        'timepay' => true,
        'canal' => true,
        'created' => true,
        'modified' => true,
        'gpsoffre' => true,
        'client' => true,
    ];
}
