<?php

// $dll = new \SplDoublyLinkedList;

// $dll->push(100);
// $dll->push(10);
// $dll->push(3);
// $dll->unshift(200);
// $dll->add(2, 50);
// $dll->pop();
// $dll->shift();
// $dll->offsetUnset(1);
// $dll->push(2);

// var_dump($dll);

//FIFO



//LIFO

//minHeap
// $minHeap = new SplMinHeap;
// $minHeap->insert('aaa');
// $minHeap->insert('aaab');
// $minHeap->insert('aaac');
// $minHeap->insert('aaad');
// $minHeap->insert('aaa');
// $minHeap->insert('aaa');
// $minHeap->insert('aaa');

// var_dump($minHeap);

//maxHeap
// $maxHeap = new SplMaxHeap;
// $maxHeap->insert(100);
// $maxHeap->insert(59);
// $maxHeap->insert(200);
// $maxHeap->insert(20);
// $maxHeap->insert(19);
// $maxHeap->insert(18);

// var_dump($maxHeap);

//SplPriorityQueue
// $prQueue = new SplPriorityQueue;
// $prQueue->insert('Obeso', 7);
// $prQueue->insert('Gestante', 9);
// $prQueue->insert('Nada', 1);
// $prQueue->insert('Idoso', 8);

// $prQueue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);

// foreach($prQueue as $value) {
//     echo "{$value['priority']} || {$value['data']} <br/>";
// }

//SplStorageObject
class ArmasBrancas {
    public $arma;
    public function __construct(String $arma)
    {
        $this->arma = $arma;
    }
}

$a1 = new ArmasBrancas('Espada');
$a2 = new ArmasBrancas('Katana');
$a3 = new ArmasBrancas('Kunai');
$storage = new SplObjectStorage;

$storage->attach($a1);
$storage->attach($a2);
$storage->attach($a3);
var_dump($storage);

foreach($storage as $armaBranca) {
    echo "{$armaBranca->arma} <br/>";
}