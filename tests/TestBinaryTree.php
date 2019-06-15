<?php
class TestBinaryTree extends \PHPUnit\Framework\TestCase
{
    protected $BinaryTree;
    protected $root;
    protected $node3;
    protected $node2;
    protected $node7;
    protected $node4;
    protected $node5;
    protected $node6;
    protected $node8;
    protected $node9;
    protected function setUp()
    {
        parent::setUp();
        $this->root = new BinaryNode("1");
        $this->BinaryTree = new BinaryTree($this->root);
        $this->node2 = new BinaryNode("2");
        $this->node3 = new BinaryNode("3");
        $this->node4 = new BinaryNode("4");
        $this->node5 = new BinaryNode("5");
        $this->node6 = new BinaryNode("6");
        $this->node7 = new BinaryNode("7");
        $this->node8 = new BinaryNode("8");
        $this->node9 = new BinaryNode("9");
        $this->node2->parent = $this->root;
        $this->node3->parent = $this->root;
        $this->node4->parent = $this->node2;
        $this->node5->parent = $this->node2;
        $this->node6->parent = $this->node3;
        $this->node7->parent = $this->node3;
        $this->node8->parent = $this->node4;
        $this->node9->parent = $this->node9;
    }
    protected function tearDown()
    {
        parent::tearDown();
        $this->BinaryTree = NULL;
    }
    public function testLca()
    {
        $findLca = $this->BinaryTree->lca($this->node3, $this->node7);
        $this->assertEquals($this->node3, $findLca);
    }
}
