<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Physclient Entity
 *
 * @property int $id
 * @property string $name
 * @property string $prenoms
 * @property string $email
 * @property string $cel
 * @property string $tel
 * @property string $adresse
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Paiementphysique[] $paiementphysiques
 */
class Physclient extends Entity
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
        'name' => true,
        'prenoms' => true,
        'email' => true,
        'cel' => true,
        'tel' => true,
        'adresse' => true,
        'created' => true,
        'modified' => true,
        'paiementphysiques' => true,
    ];
}
