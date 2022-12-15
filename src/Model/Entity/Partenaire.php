<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Partenaire Entity
 *
 * @property int $id
 * @property string $codepartenaire
 * @property string|null $raisonsociale
 * @property string|null $password
 * @property string|null $tel
 * @property string|null $cel
 * @property string|null $email
 * @property string|null $bp
 * @property string|null $adresse
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Partenaire extends Entity
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
        'raisonsociale' => true,
        'password' => true,
        'tel' => true,
        'cel' => true,
        'email' => true,
        'bp' => true,
        'adresse' => true,
        'created' => true,
        'modified' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
