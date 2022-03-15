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
        $query = "INSERT INTO pokemon_cards (`name`, HP, foil, price) VALUES ({$_GET[name]}, {$_GET[HP]}, {$_GET[foil]}, {$_GET[price]})";
        $this->databaseManager->connection->query($query);
        //$result =  $this->databaseManager->connection->query($query);
        //return $result;
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
        // return [
        //     ['name' => 'dummy one'],
        //     ['name' => 'dummy two'],
        // ];

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update(): void
    {
    }

    public function delete(): void
    {
    }
}
