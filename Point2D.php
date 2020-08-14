<?php


class Point2D
{
    protected $x = 0.0;
    protected $y = 0.0;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        return [$this->x, $this->y];
    }

    public function __toString()
    {
        return '(' . $this->x . ',' . $this->y . ')';
    }
}