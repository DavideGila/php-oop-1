<?php
    class Movie
    {
        private int $id;
        private string $title;
        private string $overview;
        private float $vote_average;
        private string $poster_path;
        private string $original_language;

        function __construct($id, $title, $overview, $vote, $poster_path, $original_language){
            $this->id = $id;
            $this->title = $title;
            $this->overview = $overview;
            $this->vote_average = $vote;
            $this->poster_path = $poster_path;
            $this->original_language = $original_language;
        }
    }
?>