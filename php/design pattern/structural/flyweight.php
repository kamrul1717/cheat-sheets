<?php

class TreeType {
    private string $name;
    private string $color;
    private string $texture;

    public function __construct(string $name, string $color, string $texture) {
        $this->name = $name;
        $this->color = $color;
        $this->texture = $texture;
    }

    public function draw(int $x, int $y) {
        echo "Drawing {$this->name} tree of color {$this->color} at ($x, $y)\n";
    }
}


class TreeFactory {
    private array $treeTypes = [];

    public function getTreeType(string $name, string $color, string $texture): TreeType {
        $key = $name . $color . $texture;
        if (!isset($this->treeTypes[$key])) {
            $this->treeTypes[$key] = new TreeType($name, $color, $texture);
        }
        return $this->treeTypes[$key];
    }
}

class Tree {
    private int $x;
    private int $y;
    private TreeType $type;

    public function __construct(int $x, int $y, TreeType $type) {
        $this->x = $x;
        $this->y = $y;
        $this->type = $type;
    }

    public function draw() {
        $this->type->draw($this->x, $this->y);
    }
}

$factory = new TreeFactory();

$trees = [];
$trees[] = new Tree(1, 1, $factory->getTreeType("Oak", "Green", "Rough"));
$trees[] = new Tree(2, 5, $factory->getTreeType("Oak", "Green", "Rough"));
$trees[] = new Tree(10, 20, $factory->getTreeType("Pine", "Dark Green", "Smooth"));

foreach ($trees as $tree) {
    $tree->draw();
}

// Output:
/*
Drawing Oak tree of color Green at (1, 1)
Drawing Oak tree of color Green at (2, 5)
Drawing Pine tree of color Dark Green at (10, 20)
*/

