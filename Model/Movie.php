<?php
class Movie
{
    private int $id;
    private string $title;
    private string $overview;
    private float $vote_average;
    private string $poster_path;
    private string $original_language;

    function __construct($id, $title, $overview, $vote, $poster_path, $original_language)
    {
        $this->id = $id;
        $this->title = $title;
        $this->overview = $overview;
        $this->vote_average = $vote;
        $this->poster_path = $poster_path;
        $this->original_language = $original_language;
    }
    
    public function printCard()
    {
        $image = $this->poster_path;
        $title = $this->title;
        $content = $this->overview;
        $custom = $this->vote_average;
        include __DIR__ . "/../Views/card.php";
    }
}

$movieString = file_get_contents(__DIR__ . '/movie_db.json');
$movieList = json_decode($movieString, true);
$movies = [];
foreach ($movieList as $item) {
    $movies[] = new Movie($item['id'], $item['title'], $item['overview'], $item['vote_average'], $item['poster_path'], $item['original_language']);
}
