<?php

namespace Repository {
    use Entity\TodoList;

    interface TodoListRepository
    {
        function save(TodoList $todoList): void;
        function remove(int $number): bool;
        function findAll(): array;
    }

    class TodoListRepositoryImpl implements TodoListRepository
    {
        private array $todoList = array();
        public function save(TodoList $todoList): void
        {
            $number = sizeOf($this->todoList) + 1;

            $this->todoList[$number] = $todoList;
        }

        public function remove(int $number): bool
        {
            if ($number > sizeof($this->todoList)) {
                return false;
            }

            for ($i = $number; $i < sizeof($this->todoList); $i++) {
                $this->todoList[$i] = $this->todoList[$i + 1];
            }

            unset($this->todoList[sizeof($this->todoList)]);
            return true;
        }

        public function findAll(): array
        {
            return $this->todoList;
        }
    }
}