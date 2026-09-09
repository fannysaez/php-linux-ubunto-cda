<?php

class GameLibrary
{
    private array $games;
    private string $owner;

    public function __construct(array $games, string $owner)
    {
        $this->games = $games;
        $this->owner = $owner;
    }

    //addGame
    public function addGame(string $game)
    {
        if (!in_array($game, $this->games)) {
            array_push($this->games, $game);
        }
    }

    //removeGame
    public function removeGame(string $game)
    {
        if (in_array($game, $this->games)) {
            $index = array_search($game, $this->games);
            unset($this->games[$index]);
            $this->games = array_values($this->games);
        }
    }

    //giveGame
    public function giveGame(string $game, GameLibrary $library)
    {
        $this->removeGame($game);
        $library->addGame($game);
    }

    // get
    public function getGames(): array
    {
        return $this->games;
    }

    public function getOwner(): string
    {
        return $this->owner;
    }

    // set
    public function setGames(array $newGames): void
    {
        $this->games = $newGames;
    }

    public function setOwner(string $newOwner): void
    {
        $this->owner = $newOwner;
    }
}