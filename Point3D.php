<?php

include_once 'Point2D.php';

class Point3D extends Point2D
{
    protected $z = 0.0;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getXYZ()
    {
        return [$this->x, $this->y, $this->z];
    }

    public function __toString()
    {
        return '(' . $this->x . ',' . $this->y . ',' . $this->z . ')';
    }
}