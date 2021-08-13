<?php

class Word
{
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)
    public string $frenchWord;
    public string $englishWord;
    public string $playerTranslation;
    public int $totalScore;

    public function __construct(string $frenchWord, string $englishWord)
    {

        $this->frenchWord = $frenchWord;
        $this->englishWord = $englishWord;

        // TODO: use this function to verify if the provided answer by the user matches the correct one
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        $this->playerTranslation = $_POST("translation");
        $this->totalScore = 0;

        if (strtolower($this->playerTranslation) == $this->englishWord) {
            $totalScore++;
            echo "<div id='results'>Awsome, your Score is:" . $totalScore . "</div>";
        }

        else {
            $totalScore--;
            echo "<div id='results'>Oops! incorrect, your Score is:" . $totalScore . "</div>";
        }

        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}