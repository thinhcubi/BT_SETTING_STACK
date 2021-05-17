<?php

class Stack
{
    public array $stack;
    protected int $limit;

    public function __construct(int $limit)
    {
        $stack = [];
        $this->stack = $stack;
        $this->limit = $limit;
    }

    public function push($item): void
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new RuntimeException("Stack is empty!");
        } else {
            array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }
}