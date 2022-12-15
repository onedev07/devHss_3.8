<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property string $refpay
 * @property string $client_id
 * @property string $amount
 * @property string $canal
 * @property string $nomclient
 * @property string $cel
 * @property \Cake\I18n\FrozenTime $datepay
 * @property \Cake\I18n\FrozenTime $datefin
 *
 * @property \App\Model\Entity\Client $client
 */
class Transaction extends Entity
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
        'client_id' => true,
        'amount' => true,
        'canal' => true,
        'nomclient' => true,
        'cel' => true,
        'datepay' => true,
        'datefin' => true,
        'client' => true,
    ];
}
