<?php

declare(strict_types=1);

namespace BitExpert\PHPStanTests\Helper;

use BitExpert\PHPStanTests\Model\Contact;
use  Magento\Framework\ObjectManager\ObjectManager;

/**
 * Test ObjectManager's typehints
 */
class TestObjectManagerTypeHints
{
    public function __construct(private ObjectManager $objectManager)
    {}

    protected function typehints(): void
    {
        $obj = $this->objectManager->create(Contact::class);

        if ($obj !== null) {
            $id = $obj->getId();
        }
    }
}
