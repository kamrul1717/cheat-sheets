<?php

class TreeNode {
    public $val;
    public $left = null;
    public $right = null;

    public function __construct($val) {
        $this->val = $val;
    }
}

function isSymmetric($root) {
    if ($root === null) return true;
    return isMirror($root->left, $root->right);
}

function isMirror($t1, $t2) {
    if ($t1 === null && $t2 === null) return true;
    if ($t1 === null || $t2 === null) return false;

    return ($t1->val === $t2->val)
        && isMirror($t1->left, $t2->right)
        && isMirror($t1->right, $t2->left);
}

$root = new TreeNode(1);
$root->left = new TreeNode(2);
$root->right = new TreeNode(2);
$root->left->left = new TreeNode(3);
$root->left->right = new TreeNode(4);
$root->right->left = new TreeNode(4);
$root->right->right = new TreeNode(3);

echo isSymmetric($root) ? "true" : "false"; // Output: true

