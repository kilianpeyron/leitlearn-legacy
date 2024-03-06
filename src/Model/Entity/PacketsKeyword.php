<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PacketsKeyword Entity
 *
 * @property int $packet_id
 * @property int $keyword_id
 *
 * @property \App\Model\Entity\Packet $packet
 * @property \App\Model\Entity\Keyword $keyword
 */
class PacketsKeyword extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'packet' => true,
        'keyword' => true,
    ];
}
