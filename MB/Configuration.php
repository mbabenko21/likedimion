<?php
namespace MB;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 22:05
 */
use MB\I\LoaderInterface;

class Configuration
{
    /** @var array */
    protected $configuration;

    public function __construct(LoaderInterface $loader)
    {
        $this->configuration = $loader->get();
    }

    /**
     * @return array
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }
}
