<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(): void
    {
        $query = "INSERT INTO pokemon_cards (`name`, HP, foil, price) VALUES ('{$_POST['name']}', '{$_POST['HP']}', '{$_POST['foil']}', '{$_POST['price']}')";
        $this->databaseManager->connection->query($query);
    }

    // Get one
    public function find(): array
    {
    }

    // Get all
    public function get(): PDOStatement
    {
        // TODO: replace dummy data by real one
        $query = 'SELECT * FROM `pokemon_cards`';
        $this->databaseManager->connection->query($query);
        $result =  $this->databaseManager->connection->query($query);
        return $result;

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update(): array
    {
        $cardId = $_GET['card_id'];
        $query = "SELECT id,`name`, HP, foil, price FROM `pokemon_cards` WHERE id= '{$cardId}'";
        $this->databaseManager->connection->query($query);
        $result =  $this->databaseManager->connection->query($query);
        $card = $result->fetch();
        require 'edit.php';
        if ($_POST['value'] != 'value') {
            $query = "UPDATE `pokemon_cards` SET {$_POST['edit']} = '{$_POST['value']}' WHERE id = '{$cardId}'";
            $this->databaseManager->connection->query($query);
        };
        return $card;
    }

    public function delete(): void
    {
        $cardId = $_GET['card_id'];
        $query = "SELECT id,`name`, HP, foil, price FROM `pokemon_cards` WHERE id= '{$cardId}'";
        $this->databaseManager->connection->query($query);
        $result =  $this->databaseManager->connection->query($query);
        $card = $result->fetch();
        require 'delete.php';
        var_dump($_POST);
        if ($_POST['yes-no'] === 'no') {
            header("location: index.php");
        };
        if ($_POST['yes-no'] === 'yes') {
            $query = "DELETE FROM `pokemon_cards` WHERE id= '{$cardId}'";
            $this->databaseManager->connection->query($query);
            header("location: index.php");
        };
    }
}
