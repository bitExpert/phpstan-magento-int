<?php

declare(strict_types=1);

namespace BitExpert\PHPStanTests\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;

class Patch2 implements DataPatchInterface
{
    public function apply(): self
    {
        return $this;
    }

    public static function getDependencies()
    {
        return [
            Patch1::class,
        ];
    }

    public function getAliases()
    {
        return [];
    }
}
