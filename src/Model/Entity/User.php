<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $uid
 * @property string $social_id
 * @property string $social_type
 * @property string $username
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $zipcode
 * @property string $bio
 * @property string $phone
 * @property string $website
 * @property string $facebook
 * @property string $twitter
 * @property string $image
 * @property int $status
 * @property string $activation_key
 * @property string $timezone
 * @property string $access_token
 * @property int $is_admin
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Social $social
 */
class User extends Entity
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
       
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
