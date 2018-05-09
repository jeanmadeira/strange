<?php

namespace App\Services\Voicer\Question;

class TextService implements QuestionInterface
{
    use QuestionSingleTrait;

    private $question;

    public function mainQuestion($label)
    {
        $this->question = [
            'type' => 'text',
            'is_required' => 1,
            'label' => $label,
            'order' => 1,
            'user_id' => 1,
            'answers' => $this->defaultOptionsAnswer()
        ];
    }

    public function setAnswer($label)
    {
    }

    public function defaultOptionsAnswer()
    {
        return [
            'type' => 'text',
            'label' => '',
            'user_id' => 1
        ];
    }
}
