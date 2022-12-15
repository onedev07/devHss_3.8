<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Partenairepayment Entity
 *
 * @property int $id
 * @property string|null $offre_id
 * @property string|null $client_id
 * @property string|null $partenaire_id
 * @property string|null $perioed_id
 * @property string|null $prixtotal
 * @property \Cake\I18n\FrozenTime|null $datedebut
 * @property \Cake\I18n\FrozenTime|null $datefin
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Offre $offre
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Partenaire $partenaire
 * @property \App\Model\Entity\Perioed $perioed
 */
class Partenairepayment extends Entity
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
        'offre_id' => true,
        'client_id' => true,
        'partenaire_id' => true,
        'perioed_id' => true,
        'prixtotal' => true,
        'datedebut' => true,
        'datefin' => true,
        'created' => true,
        'modified' => true,
        'offre' => true,
        'client' => true,
        'partenaire' => true,
        'perioed' => true,
    ];
}
