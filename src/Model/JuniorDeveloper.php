<?php
declare(strict_types=1);

namespace Application\Model;

/**
 * Class JuniorDeveloper
 * @package Application\Model
 */
class JuniorDeveloper extends Developer
{
    private const AUTHORITY = 2;

    private const START_BONUS = 0.23;

    /**
     * @return float
     */
    public function calculateGrant(): float
    {
        return $this->getAuthorityFactor() * $this->maxGrant;
    }

    /**
     * @return float
     */
    public function getAuthorityFactor(): float
    {
        return (self::AUTHORITY / Developer::MAX_AUTHORITY) + self::START_BONUS;
    }
}