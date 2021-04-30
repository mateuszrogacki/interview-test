<?php
declare(strict_types=1);

namespace Application\Model;

/**
 * Class SeniorDeveloper
 * @package Application\Model
 */
class SeniorDeveloper extends Developer
{
    private const AUTHORITY = 6;

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
        return self::AUTHORITY / Developer::MAX_AUTHORITY;
    }
}