<?php

require_once "vendor/autoload.php";


$person_a = new Person("User", "1", NULL);
$person_b = new Person("User", "2", $person_a);

$input_1 = array(
    "key1" => 1,
    "key2" => array(
        "key3" => 1,
        "key4" => array(
            "key5" => 4
        ),
    ),
);

$input_2 = array(
    "key1" => 1,
    "key2" => array(
        "key3" => 1,
        "key4" => array(
            "key5" => 4,
            'User' => $person_b,
        ),
    ),
);

$depth = new Depth();

print "Solution 1 : printing keys with their depth :" . "\r\n\r\n";

$depth->printDepth($input_1);

print "Solution 2 : printing keys with their depth along with object handling  :" . "\r\n \r\n";

$depth->printDepth($input_2);


try {

    $root = new BinaryNode("1");
    $tree = new BinaryTree($root);
    $node2 = new BinaryNode("2");
    $node3 = new BinaryNode("3");
    $node4 = new BinaryNode("4");
    $node5 = new BinaryNode("5");
    $node6 = new BinaryNode("6");
    $node7 = new BinaryNode("7");
    $node8 = new BinaryNode("8");
    $node9 = new BinaryNode("9");

    $node2->parent = $root;
    $node3->parent = $root;

    $node4->parent = $node2;
    $node5->parent = $node2;
    $node6->parent = $node3;
    $node7->parent = $node3;

    $node8->parent = $node4;
    $node9->parent = $node4;

    print "Solution 3 : Finding least common ancestor "."\r\n\r\n";

    $findLca = $tree->lca($node3, $node7);

    print $findLca->value;

} catch (Exception $e) {

    print $e->getMessage();
}
