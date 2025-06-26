<?php

class TreeNode {
    public $val;
    public $left;
    public $right;

    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}


// Method 1 - Recursive DFS (Top-down)
function maxDepth($root) {
    if ($root === null) return 0;

    $left = maxDepth($root->left);
    $right = maxDepth($root->right);

    return max($left, $right) + 1;
}

// Method 1 - Iterative DFS (Using Stack)
function maxDepthDFS($root) {
    if ($root === null) return 0;

    $stack = [[$root, 1]];
    $maxDepth = 0;

    while (!empty($stack)) {
        [$node, $depth] = array_pop($stack);
        if ($node !== null) {
            $maxDepth = max($maxDepth, $depth);
            if ($node->left) array_push($stack, [$node->left, $depth + 1]);
            if ($node->right) array_push($stack, [$node->right, $depth + 1]);
        }
    }

    return $maxDepth;
}

// Method 3 - Iterative BFS (Using Queue)
function maxDepthBFS($root) {
    if ($root === null) return 0;

    $queue = new SplQueue();
    $queue->enqueue($root);
    $depth = 0;

    while (!$queue->isEmpty()) {
        $size = $queue->count();
        for ($i = 0; $i < $size; $i++) {
            $node = $queue->dequeue();
            if ($node->left) $queue->enqueue($node->left);
            if ($node->right) $queue->enqueue($node->right);
        }
        $depth++;
    }

    return $depth;
}


