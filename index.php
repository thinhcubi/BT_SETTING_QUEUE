<?php

include_once "Queue.php";
include_once "Node.php";

$queue = new Queue();
$queue->enqueue("start");
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);
$queue->enqueue("End");
$queue->dequeue();
while (!$queue->isEmpty()){
    echo $queue->dequeue()."\n";
}
var_dump($queue->isEmpty());
