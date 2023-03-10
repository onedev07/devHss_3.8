<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Client Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $password
 * @property string|null $cel
 * @property string|null $tel
 * @property string|null $web
 * @property string|null $bp
 * @property string|null $adresse
 * @property string|null $localisation_site
 * @property string $offre_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Offre $offre
 * @property \App\Model\Entity\Commentaire[] $commentaires
 * @property \App\Model\Entity\Paiement[] $paiements
 * @property \App\Model\Entity\Souscription[] $souscriptions
 */
class Client extends Entity
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
        'email' => true,
        'password' => true,
        'cel' => true,
        'tel' => true,
        'web' => true,
        'bp' => true,
        'adresse' => true,
        'localisation_site' => true,
        'offre_id' => true,
        'created' => true,
        'modified' => true,
        'offre' => true,
        'commentaires' => true,
        'paiements' => true,
        //'souscriptions' => true,
        'demandes' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
          return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
