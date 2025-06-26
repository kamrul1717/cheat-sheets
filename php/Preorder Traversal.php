<?php

class TreeNode {
    public $val;
    public $left = null;
    public $right = null;

    public function __construct($val) {
        $this->val = $val;
    }
}

function preorderTraversal($root) {
    $result = [];
    preorderHelper($root, $result);
    return $result;
}

function preorderHelper($node, &$result) {
    if ($node === null) return;

    $result[] = $node->val;              // Visit root
    preorderHelper($node->left, $result);  // Traverse left
    preorderHelper($node->right, $result); // Traverse right
}

$root = new TreeNode(1);
$root->left = new TreeNode(2);
$root->right = new TreeNode(3);
$root->left->left = new TreeNode(4);
$root->left->right = new TreeNode(5);

$result = preorderTraversal($root);
echo implode(', ', $result); // Output: 1, 2, 4, 5, 3
