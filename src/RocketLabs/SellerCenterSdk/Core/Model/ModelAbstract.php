<?php

namespace RocketLabs\SellerCenterSdk\Core\Model;

/**
 * Class ModelAbstract
 */
abstract class ModelAbstract
{
    const TYPE_STRING = 'string';
    const TYPE_MIXED = 'mixed';
    const TYPE_BOOL = 'bool';
    const TYPE_INT = 'int';
    const TYPE_FLOAT = 'float';
    const TYPE_DATETIME = 'dateTime';

    /**
     * @var array
     */
    protected $fieldDefinition = [];

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        foreach ($this->fieldDefinition as $key => $type) {
            if (!array_key_exists($key, $data) || is_null($data[$key]) || '' === $data[$key]) {
                $this->data[$key] = null;
                continue;
            }

            if (empty($type)) {
                $this->data[$key] = $data[$key];
                continue;
            }

            switch ($type) {
                case static::TYPE_MIXED:
                case static::TYPE_STRING:
                    $this->data[$key] = $data[$key];
                    break;
                case static::TYPE_BOOL:
                    $this->data[$key] = (bool) $data[$key];
                    break;
                case static::TYPE_INT:
                    $this->data[$key] = (int) $data[$key];
                    break;
                case static::TYPE_FLOAT:
                    $this->data[$key] = (float) $data[$key];
                    break;
                case static::TYPE_DATETIME:
                    $this->data[$key] = new \DateTimeImmutable($data[$key]);
                    break;
                default:
                    $this->data[$key] = $this->buildObjectFromDefinition($type, $data[$key]);
            }
        }
    }

    /**
     * @param string $class
     * @param mixed $data
     * @return mixed
     */
    protected function buildObjectFromDefinition($class, $data)
    {
        return new $class($data);
    }
}
