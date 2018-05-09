<?php

namespace App\Services\Voicer\Question;

interface QuestionInterface
{
    public function mainQuestion($label);

    public function setAnswer($label);

    public function defaultOptionsAnswer();

    public function save();

    public function saveAnswer($answers);
}
