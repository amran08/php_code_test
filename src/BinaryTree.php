<?php

class BinaryTree
{

    public $root = NULL;

    public function __construct(BinaryNode $node)
    {
        $this->root = $node;
    }

    /*
     *  @param $firstNode BinaryNode
     *  @param $secondNode BinaryNode
     *  @return BinaryNode
     */

    public function lca(BinaryNode $firstNode, BinaryNode $secondNode): BinaryNode

    {
        print "[ Least common ancestor of Node " . $firstNode->value . " and " . " Node " . $secondNode->value . " ] => ";

        $firstNode_parent_list = [];
        $secondNode_parent_list = [];

        while ($firstNode != NULL) {
            array_push($firstNode_parent_list, $firstNode);
            $firstNode = $firstNode->parent;
        }

        while ($secondNode != NULL) {
            array_push($secondNode_parent_list, $secondNode);
            $secondNode = $secondNode->parent;
        }

        foreach ($firstNode_parent_list as $f_node) {
            foreach ($secondNode_parent_list as $s_node) {
                if ($f_node->value == $s_node->value) {
                    return $f_node; //or $s_node
                }
            }

        }

        return NULL;

    }


}