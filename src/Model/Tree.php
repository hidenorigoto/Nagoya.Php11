<?php
namespace Nagoya\Dk11\Model;

class Tree
{
    private $data;

    public function __construct()
    {
        $this->data = [
            1  => ['path' => [1,0,0,0], 'depth' => 0],
            2  => ['path' => [1,2,0,0], 'depth' => 1],
            3  => ['path' => [1,3,0,0], 'depth' => 1],
            4  => ['path' => [1,4,0,0], 'depth' => 1],
            5  => ['path' => [1,2,5,0], 'depth' => 2],
            6  => ['path' => [1,2,6,0], 'depth' => 2],
            7  => ['path' => [1,2,7,0], 'depth' => 2],
            8  => ['path' => [1,3,8,0], 'depth' => 2],
            9  => ['path' => [1,3,9,0], 'depth' => 2],
            10 => ['path' => [1,3,10,0], 'depth' => 2],
            11 => ['path' => [1,4,11,0], 'depth' => 2],
            12 => ['path' => [1,4,12,0], 'depth' => 2],
            13 => ['path' => [1,4,13,0], 'depth' => 2],
            14 => ['path' => [1,2,5,14], 'depth' => 3],
            15 => ['path' => [1,2,5,15], 'depth' => 3],
            16 => ['path' => [1,2,5,16], 'depth' => 3],
            17 => ['path' => [1,2,6,17], 'depth' => 3],
            18 => ['path' => [1,2,6,18], 'depth' => 3],
            19 => ['path' => [1,2,6,19], 'depth' => 3],
            20 => ['path' => [1,2,7,20], 'depth' => 3],
            21 => ['path' => [1,2,7,21], 'depth' => 3],
            22 => ['path' => [1,2,7,22], 'depth' => 3],
            23 => ['path' => [1,3,8,23], 'depth' => 3],
            24 => ['path' => [1,3,8,24], 'depth' => 3],
            25 => ['path' => [1,3,8,25], 'depth' => 3],
            26 => ['path' => [1,3,9,26], 'depth' => 3],
            27 => ['path' => [1,3,9,27], 'depth' => 3],
            28 => ['path' => [1,3,9,28], 'depth' => 3],
            29 => ['path' => [1,3,10,29], 'depth' => 3],
            30 => ['path' => [1,3,10,30], 'depth' => 3],
            31 => ['path' => [1,3,10,31], 'depth' => 3],
            32 => ['path' => [1,4,11,32], 'depth' => 3],
            33 => ['path' => [1,4,11,33], 'depth' => 3],
            34 => ['path' => [1,4,11,34], 'depth' => 3],
            35 => ['path' => [1,4,12,35], 'depth' => 3],
            36 => ['path' => [1,4,12,36], 'depth' => 3],
            37 => ['path' => [1,4,12,37], 'depth' => 3],
            38 => ['path' => [1,4,13,38], 'depth' => 3],
            39 => ['path' => [1,4,13,39], 'depth' => 3],
            40 => ['path' => [1,4,13,40], 'depth' => 3],
        ];
    }

    public function getPath($number)
    {
        return $this->data[$number];
    }
}
