<?php
namespace Nagoya\Dk11;

use Nagoya\Dk11\Model\Tree;

class Dk11
{
    /**
     * @var Tree
     */
    private $tree;

    public function __construct()
    {
        $this->tree = new Tree();
    }

    public function run($input)
    {
        $parsedInput = $this->parseInput($input);
        return $this->solve($parsedInput);
    }

    public function parseInput($input)
    {
        list($from, $to) = explode('->', $input);
        return compact('from', 'to');
    }

    public function solve($input)
    {
        $fromPath = $this->tree->getPath($input['from']);
        $toPath = $this->tree->getPath($input['to']);

        $intersect = array_filter(array_intersect($fromPath['path'], $toPath['path']), function($v) {
            return $v > 0;
        });

        $upCount = $fromPath['depth'] - count($intersect) + 1;
        $downCount = $toPath['depth'] - count($intersect) + 1;

        return $this->getSign($upCount, $downCount);
    }

    public function getSign($up, $down)
    {
        $matrix = [
            ['me', 'da', '-',  '-'],
            ['mo', 'si', 'ni', '-'],
            ['-',  'au', 'co', '-'],
            ['-',  '-',  '-',  '-'],
        ];

        return $matrix[$up][$down];
    }
}
