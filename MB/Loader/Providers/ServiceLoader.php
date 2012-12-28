<?php
namespace MB\Loader\Providers;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 10:01
 */
use MB\I\LoaderInterface;
use MB\I\ServiceLoaderInterface;

class ServiceLoader implements LoaderInterface, ServiceLoaderInterface
{
    /** @var array */
    protected $data = array();
    /** @var null */
    protected $provider = NULL;

    public function __construct(array $config, $name)
    {
        $this->data = $config;
        $this->load($name);
    }

    /**
     * Загружает данные
     * @param array $dataProvider
     * @return void
     */
    public function load($dataProvider)
    {
        $this->provider = $dataProvider;
    }

    /**
     * Получает данные
     * @return mixed
     */
    public function get()
    {
        return $this->data;
    }

    /**
     * Обновляет данные
     * @param array $data
     * @return void
     */
    public function update($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @return string
     */
    public function getInstance()
    {
        return $this->getKey("instance");
    }

    /**
     * @return array
     */
    public function getArguments()
    {
        return $this->getKey("arguments");
    }

    /**
     * @return array
     */
    public function getAutoCalls()
    {
        return $this->getKey("autocall");
    }

    public function getProperties()
    {
        return $this->getKey("properties");
    }

    protected function getKey($key)
    {
        return (isset($this->data[$key])) ? $this->data[$key] : NULL;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProvider();
    }
}
