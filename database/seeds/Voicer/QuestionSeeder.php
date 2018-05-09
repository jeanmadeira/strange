<?php

use App\Services\Voicer\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    private $defaultQuestions = [];

    public function __construct()
    {
        $this->defaultQuestions();
    }

    private function defaultQuestions()
    {
        $matrizAnswer1 = [
            'Preço dos produtos',
            'Clareza das informações sobre o produto/oferta (descrição detalhada, fotos e avaliações de outros compradores)',
            'Custo do frete',
            'Prazo de entrega oferecido no ato da compra (carrinho)'
        ];
        $matrizAnswer2 = [
            'Acompanhamento da entrega da compra (via email, sms ou área vip)',
            'Entrega dentro do prazo estipulado',
            'Condições do produto enttregue',
            'Prazo de entrega oferecido no ato da compra (carrinho)'
        ];
        $matrizAnswer3 = [
            'Produto A',
            'Produto B',
            'Produto C',
        ];
        $matrizAnswer4 = [
            'Construção',
            'Reforma',
            'Decoração',
        ];
        $matrizAnswer5 = [
            'Sala de estar',
            'Sala de jantar',
            'Quarto',
            'Quarto infantil',
            'Cozinha',
            'Banheiro',
            'Lavanderia',
            'Escritório',
            'Área externa (varanda, jardim, churrasqueira)',
            'Outro'
        ];
        $matrizAnswer6 = [
            'Já terminei',
            'Até 1 mês',
            'Entre 1 e 2 meses',
            'Mais de 2 meses'
        ];

        $this->defaultQuestions = [
            $this->questionSingle(Question\NpsService::class, 'Qual a probabilidade de recomendar a MadeiraMadeira para um amigo ou colega?'),
            $this->questionComplex(Question\MatrizService::class, 'Com relação a sua experiência de compra conosco, qual o seu nível de satisfação quanto aos seguintes aspectos:', $matrizAnswer1),
            $this->questionComplex(Question\MatrizService::class, 'Com relação a sua experiência na entrega do produto, qual o seu nível de satisfação quanto aos seguintes aspectos:', $matrizAnswer2),
            $this->questionComplex(Question\NpsProductService::class, 'Pensando no produto que você adquiriu, qual a probabilidade de você indicar este(s) produto(s) que você comprou para um amigo ou colega?', $matrizAnswer3),
            $this->questionSingle(Question\BooleanService::class, 'Você precisou entrar em contato com o atendimento de pós-venda da MadeiraMadeira?'),
            $this->questionSingle(Question\FeelingService::class, 'Se SIM, qual o grau de satisfação com o atendimento?'),
            $this->questionSingle(Question\TextService::class, 'Seus comentários são muito importante para nós. Com ele você nos ajuda a melhorar nosso atendimento.'),
            $this->questionSingle(Question\BooleanService::class, 'Você voltaria a comprar na MadeiraMadeira?'),
            $this->questionSingle(Question\BooleanService::class, 'Você comprou porque está realizando algum projeto?'),
            $this->questionComplex(Question\MultiService::class, 'Qual projeto você está realizando?', $matrizAnswer4),
            $this->questionComplex(Question\MultiService::class, 'Qual o ambiente?', $matrizAnswer5),
            $this->questionComplex(Question\MultiService::class, 'Em quanto tempo você planeja terminar o seu projeto?', $matrizAnswer6),
            $this->questionSingle(Question\BooleanService::class, 'Você contratou um arquiteto / designer de interiores?'),
        ];
    }

    private function questionSingle($class, $label)
    {
        $class = app($class);
        $class->mainQuestion($label);
        return $class;
    }

    private function questionComplex($class, $label, $answers)
    {
        $class = app($class);
        $class->mainQuestion($label);

        foreach ($answers as $answer) {
            $class->setAnswer($answer);
        }

        return $class;
    }

    public function run()
    {
        return array_map(function ($question) {
            return $question->save();
        }, $this->defaultQuestions);

    }
}
