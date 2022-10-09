<?php

declare(strict_types=1);

namespace BitExpert\PHPStanTests\Helper;

use BitExpert\PHPStanTests\Model\ContactFactory;
use BitExpert\PHPStanTests\Model\Contact;

/**
 * Test DataObject's magic methods
 */
class TestDataObjectReflection
{
    public function __construct(private ContactFactory $contactFactory)
    {}

    protected function createContactModel(string $firstname, string $lastname): Contact
    {
        /** @var Contact $contact */
        $contact = $this->contactFactory->create();
        $contact->setFirstname($firstname);
        $contact->setLastname($lastname);

        if ($firstname !== $contact->getFirstname()) {
            throw new \RuntimeException();
        }

        if ($lastname !== $contact->getLastname()) {
            throw new \RuntimeException();
        }

        return $contact;
    }
}
