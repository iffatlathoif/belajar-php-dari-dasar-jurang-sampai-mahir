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

        private \PDO $connection;

        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }
        public function save(TodoList $todoList): void
        {
            // $number = sizeOf($this->todoList) + 1;

            // $this->todoList[$number] = $todoList;

            $sql = "INSERT INTO todolist(todo) VALUES(?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$todoList->getTodo()]);
        }

        public function remove(int $number): bool
        {
            // if ($number > sizeof($this->todoList)) {
            //     return false;
            // }

            // for ($i = $number; $i < sizeof($this->todoList); $i++) {
            //     $this->todoList[$i] = $this->todoList[$i + 1];
            // }

            // unset($this->todoList[sizeof($this->todoList)]);
            // return true;

            $sql = "SELECT id FROM todolist WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$number]);

            if ($statement->fetch()) {
                $sql = "DELETE FROM todolist WHERE id = ?";
                $statement = $this->connection->prepare($sql);
                $statement->execute([$number]);
                return true;
            } else {
                return false;
            }


        }

        public function findAll(): array
        {
            // return $this->todoList;
            $sql = "SELECT id, todo FROM todolist";
            $statement = $this->connection->prepare($sql);
            $statement->execute();

            $result = [];
            foreach($statement as $row) {
                $todoList = new TodoList();
                $todoList->setId($row["id"]);
                $todoList->setTodo($row["todo"]);
                $result[] = $todoList;
            }

            return $result;
        }
    }
}