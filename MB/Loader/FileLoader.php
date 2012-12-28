<?php
namespace MB\Loader;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 22:08
 */
use MB\I\LoaderInterface;
use MB\Exception\FileNotFoundException;

class FileLoader implements LoaderInterface
{
    /** @var string */
    protected $data;
    /** @var string */
    protected $provider;

    /**
     * Загружает данные
     * @param string $dataProvider
     * @throws \MB\Exception\FileNotFoundException
     * @return void
     */
    public function load($dataProvider)
    {
        if (file_exists($dataProvider)) {
            $this->provider = $dataProvider;
            $this->data = file_get_contents($dataProvider);
        } else {
            throw new FileNotFoundException($dataProvider);
        }
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
     * @param mixed $data
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
}
