<?php
namespace app\classes;

class Phone
{
    public string $brand;
    public string $model;
    public int $memory;
    public float $price;

    public function __construct(string $brand, string $model, int $memory, float $price)
    {
        if ($memory <= 0) {
            throw new \InvalidArgumentException('Memory must be positive.');
        }

        if ($price <= 0) {
            throw new \InvalidArgumentException('Price must be positive.');
        }

        $this->brand = $brand;
        $this->model = $model;
        $this->memory = $memory;
        $this->price = $price;
    }

    public function getInfo(): string
    {
        return "{$this->brand} {$this->model}, {$this->memory}GB, {$this->price} so'm";
    }

    public function toArray(): array
    {
        return [
            'brand' => $this->brand,
            'model' => $this->model,
            'memory' => $this->memory,
            'price' => $this->price,
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_UNICODE);
    }
}
