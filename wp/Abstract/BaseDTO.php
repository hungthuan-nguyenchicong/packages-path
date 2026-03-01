<?php

namespace Vendorpath\Wp\Abstract;

abstract class BaseDTO
{
    protected static array $reflectionCache = [];

    // Lớp con có thể override cái này để map field
    protected static function map(object|array $loader): object|array
    {
        return $loader;
    }

    public static function fromLoader(object|array $loader): static
    {
        $class = static::class;
        if (!isset(self::$reflectionCache[$class])) {
            self::$reflectionCache[$class] = (new \ReflectionClass($class))->getConstructor()->getParameters();
        }

        $data = static::map($loader);
        $parameters = self::$reflectionCache[$class];
        $resolvedData = [];

        foreach ($parameters as $param) {
            $name = $param->getName();

            // Lấy dữ liệu thô
            $value = data_get($data, $name);

            // Ưu tiên giá trị mặc định của Constructor nếu có
            if ($value === null && $param->isDefaultValueAvailable()) {
                $value = $param->getDefaultValue();
            }

            // Ép kiểu để luôn khớp với "Hợp đồng" đã ký với Front-end
            $resolvedData[$name] = self::sanitize($value, $param->getType()?->getName());
        }

        return new static(...$resolvedData);
    }

    private static function sanitize($value, ?string $type)
    {
        return match ($type) {
            'string' => (string) ($value ?? ''),
            'int'    => (int) ($value ?? 0),
            'array'  => (array) ($value ?? []),
            'object' => (object) ($value ?? new \stdClass()),
            'bool'   => (bool) ($value ?? false),
            default  => $value,
        };
    }
}