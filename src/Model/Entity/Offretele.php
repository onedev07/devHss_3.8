<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Offretele Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $prix
 * @property string|null $description
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Elementtele[] $elementteles
 * @property \App\Model\Entity\Souscriptiontele[] $souscriptionteles
 */
class Offretele extends Entity
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
        'prix' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'elementteles' => true,
        'souscriptionteles' => true,
    ];
}
