<?php

namespace App\Entity;

class Calculation
{
    private $n;
    private $maxOccurrence;
    private $series;

    /**
     * Calculation constructor.
     * @param $n
     */
    public function __construct($n)
    {
        $this->n = $n;
        $this->maxOccurrence = PHP_INT_MIN;
        $this->series = [0,1];
    }

    public function getN(): ?int
    {
        return $this->n;
    }

    public function setN(int $n): void
    {
        $this->n = $n;
    }

    public function getMaxOccurrence(): ?int
    {
        return $this->maxOccurrence;
    }

    public function setMaxOccurrence(?int $maxOccurrence): void
    {
        $this->maxOccurrence = $maxOccurrence;
    }

    public function getSeries(): ?array
    {
        return $this->series;
    }

    public function setSeries(?array $series): void
    {
        $this->series = $series;
    }

    public function addToSeries(int $value): void
    {
        $this->series[] = $value;
    }

    public function calculate(): void
    {
        if (2 > $this->getN()) $this->setMaxOccurrence($this->getSeries()[$this->getN()]);
        else {
            for ($i = 2; $i <= $this->getN(); $i++) {

                if (0 == $i % 2) {
                    $this->addToSeries($this->getSeries()[$i / 2]);
                }
                elseif (1 == $i % 2) {
                    $this->addToSeries($this->getSeries()[$i / 2] + $this->getSeries()[($i / 2) + 1]);
                }
                if ($this->getSeries()[$i] > $this->getMaxOccurrence()) $this->setMaxOccurrence($this->getSeries()[$i]);
            }
        }
    }
}
