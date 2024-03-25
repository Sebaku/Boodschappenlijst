<?php
class QueryBuilder{
    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function selectAll($table){
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchALL(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters){
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(' :' array_keys($parameters))
        );
            die(var_dump$sql));
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die('Does not work')
        }
    }
}