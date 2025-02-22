<?php

declare(strict_types=1);

namespace BitExpert\PHPStanTests\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;

class Patch1 implements DataPatchInterface
{
    public function apply(): self
    {
        return $this;
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}
