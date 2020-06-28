<?php

/**
 * Encapsulate => Enclose within a capsule
 * mean there is restriction of access to an object internal.
 * Encapsulation is the object way to protect it's integrity and provide
 * signal to outside world
 */
class Graph
{
    public $edges = [];

    public function addEdge($edge)
    {
        if (isUnique($edge)) {
            $this->edges = $edge;
        }
    }
    /**
     * Only graph itself need to know wether the edge is uniqie or not
     */
    private function isUnique($edge)
    {
        //Check wether the $edge is unique in $edges
        return true;
    }
}
