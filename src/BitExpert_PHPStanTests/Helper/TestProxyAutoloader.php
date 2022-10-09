<?php

declare(strict_types=1);

namespace BitExpert\PHPStanTests\Helper;

/**
 * Test Proxy autoloader
 */
class TestProxyAutoloader
{
    public function __construct(private \Magento\Framework\Filesystem\DirectoryList\Proxy $directoryList)
    {}

    /**
     * @param array<string, string> $config
     */
    protected function validate(array $config): void
    {
        $this->directoryList->validate($config);
    }
}
