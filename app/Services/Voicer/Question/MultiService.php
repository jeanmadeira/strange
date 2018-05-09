<?php

namespace App\Services\Voicer\Question;

class MultiService implements QuestionInterface
{
    use QuestionComplexTrait;
    private $question;

    public function mainQuestion($label)
    {
        $this->question = [
            'type' => 'label',
            'is_required' => 1,
            'label' => $label,
            'order' => 1,
            'user_id' => 1,
            'answers' => [],
        ];
    }

    public function setAnswer($label)
    {
        $order = isset($this->question['options']) ? (count($this->question['options']) + 1) : 1;

        $this->question['options'][] = [
            'type' => 'multi',
            'is_required' => 1,
            'order' => $order,
            'label' => $label,
            'user_id' => 1,
            'answers' => $this->defaultOptionsAnswer()
        ];
    }

    public function defaultOptionsAnswer()
    {
        return [
            [
                'type' => 'checkbox',
                'label' => 'Sim',
                'value' => 1,
                'user_id' => 1
            ],
            [
                'type' => 'checkbox',
                'label' => 'Não',
                'value' => 0,
                'user_id' => 1
            ]
        ];
    }
}
