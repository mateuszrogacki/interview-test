<?php
declare(strict_types=1);

namespace Application\Model;

/**
 * Class Developer
 * @package Application\Model
 */
abstract class Developer
{
    public const MAX_AUTHORITY = 10;

    /**
     * @var int $maxGrant
     */
    protected int $maxGrant = 1200;

    /**
     * @return float
     */
    abstract public function calculateGrant(): float;
}