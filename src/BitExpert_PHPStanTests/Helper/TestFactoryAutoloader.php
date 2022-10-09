<?php

declare(strict_types=1);

namespace BitExpert\PHPStanTests\Helper;

use BitExpert\PHPStanTests\Model\ContactFactory;
use BitExpert\PHPStanTests\Model\Contact;

/**
 * Test Factory autoloader
 */
class TestFactoryAutoloader
{
    public function __construct(private ContactFactory $contactFactory)
    {}

    protected function createContactModel(): Contact
    {
        /** @var Contact $contact */
        $contact = $this->contactFactory->create();

        return $contact;
    }
}
