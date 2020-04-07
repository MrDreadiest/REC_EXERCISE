<?php

namespace App\Entity;

class Calculation
{
    /**
     * @var
     */
    private $n;
    /**
     * @var int
     */
    private $maxOccurrence;
    /**
     * @var array
     */
    private $series;

    /**
     * Calculation constructor.
     * @param $n
     */
    public function __construct($n)
    {
        $this->n = $n;
        $this->maxOccurrence = PHP_INT_MIN;
        $this->series = [0, 1];
    }

    /**
     * Calculate largest number in a series
     */
    public function calculate(): void
    {
        if (2 > $this->getN()) $this->setMaxOccurrence($this->getSeries()[$this->getN()]);
        else {
            for ($i = 2; $i <= $this->getN(); $i++) {

                if (0 == $i % 2) {
                    $this->addToSeries($this->getSeries()[$i / 2]);
                } elseif (1 == $i % 2) {
                    $this->addToSeries($this->getSeries()[$i / 2] + $this->getSeries()[($i / 2) + 1]);
                }
                if ($this->getSeries()[$i] > $this->getMaxOccurrence()) $this->setMaxOccurrence($this->getSeries()[$i]);
            }
        }
    }

    /**
     * @return int|null
     */
    public function getN(): ?int
    {
        return $this->n;
    }

    /**
     * @param int $n
     */
    public function setN(int $n): void
    {
        $this->n = $n;
    }

    /**
     * @return array|null
     */
    public function getSeries(): ?array
    {
        return $this->series;
    }

    /**
     * @param array|null $series
     */
    public function setSeries(?array $series): void
    {
        $this->series = $series;
    }

    /**
     * @param int $value
     */
    public function addToSeries(int $value): void
    {
        $this->series[] = $value;
    }

    /**
     * @return int|null
     */
    public function getMaxOccurrence(): ?int
    {
        return $this->maxOccurrence;
    }

    /**
     * @param int|null $maxOccurrence
     */
    public function setMaxOccurrence(?int $maxOccurrence): void
    {
        $this->maxOccurrence = $maxOccurrence;
    }
}
