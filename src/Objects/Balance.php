<?php

namespace bitbuyAT\Globitex\Objects;

class Balance
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get Currency symbol, e.g. EUR
     *
     * @return string
     */
    public function currency(): string
    {
        return $this->data['currency'];
    }

    /**
     * Get currency amount available for trading or payments
     *
     * @return string
     */
    public function available(): string
    {
        return $this->data['available'];
    }

     /**
     * Currency amount reserved for active orders
     *
     * @return string
     */
    public function reserved(): string
    {
        return $this->data['reserved'];
    }

    /**
     * Whole data array.
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}
