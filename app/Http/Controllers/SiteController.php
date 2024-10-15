<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $testimonials = $this->getTestimonials();
        $questions = $this->getQuestions();
        return view('pages/home', compact('testimonials', 'questions'));
    }

    private function getQuestions()
    {
        return [
            [
                'title' => 'Como posso gerenciar meu estoque de produtos?',
                'description' => 'Você pode gerenciar seu estoque através do módulo de inventário, onde é possível adicionar, editar e remover produtos, além de visualizar relatórios de estoque.'
            ],
            [
                'title' => 'Quais relatórios estão disponíveis na plataforma?',
                'description' => 'A plataforma oferece diversos relatórios, como relatórios de vendas, financeiros e de desempenho de produtos, que podem ser personalizados conforme sua necessidade.'
            ],
            [
                'title' => 'É possível integrar o sistema com outras ferramentas?',
                'description' => 'Sim, nosso sistema oferece integrações com diversas ferramentas de mercado, como sistemas de pagamento, plataformas de e-commerce e serviços de marketing digital.'
            ],
            [
                'title' => 'Como posso adicionar novos usuários ao sistema?',
                'description' => 'Você pode adicionar novos usuários acessando a seção de gerenciamento de usuários nas configurações, onde poderá criar novos perfis e definir permissões de acesso.'
            ],
            [
                'title' => 'O que fazer se eu esquecer minha senha?',
                'description' => 'Caso você esqueça sua senha, utilize a opção "Esqueci minha senha" na tela de login para receber um link de redefinição no seu e-mail cadastrado.'
            ],
            [
                'title' => 'Como obter suporte técnico?',
                'description' => 'Para obter suporte técnico, entre em contato com nossa equipe de suporte através do chat na plataforma ou envie um e-mail para suporte@cdadm.com.'
            ],
            [
                'title' => 'A plataforma é acessível em dispositivos móveis?',
                'description' => 'Sim, a plataforma é responsiva e pode ser acessada em dispositivos móveis, permitindo que você gerencie seus negócios em qualquer lugar.'
            ],
            [
                'title' => 'Quais formas de pagamento são aceitas?',
                'description' => 'Aceitamos diversas formas de pagamento, incluindo cartões de crédito, débito, transferências bancárias e plataformas de pagamento digital.'
            ]
        ];
    }

    private function getTestimonials()
    {
        return [
            'image' => 'https://media.istockphoto.com/id/882885718/pt/foto/portrait-of-female-operator-with-headset-on-answering-at-call-center.jpg?s=2048x2048&w=is&k=20&c=LfPRIM2Fd15dddEUUneeQK__-uGgpYC0sNP-I75sW90=',
            'title' => 'O que nossos clientes estão dizendo',
            'subtitle' => 'Depoimentos de clientes satisfeitos',
            'buttonText' => 'Saiba mais',
            'slides' => [
                [
                    'name' => 'João Silva',
                    'company' => 'CEO, Imobiliária XYZ',
                    'testimonial' => 'Vocês (time da DB1) foram - e são - o fator crítico de sucesso desse projeto. Vocês conseguiram pegar toda essa essência do nosso desejo, do nosso sonho, e transformar em um produto!',
                    'link' => 'https://example.com/saiba-mais'
                ],
                [
                    'name' => 'Maria Oliveira',
                    'company' => 'Gerente, Imóveis ABC',
                    'testimonial' => 'Um sistema muito intuitivo, conseguimos melhorar a produtividade da equipe com essa solução!',
                    'link' => 'https://example.com/saiba-mais'
                ],
                [
                    'name' => 'Carlos Pereira',
                    'company' => 'Diretor, Corretores SP',
                    'testimonial' => 'Ficamos muito satisfeitos com o suporte técnico e a facilidade de uso da plataforma!',
                    'link' => 'https://example.com/saiba-mais'
                ],
                [
                    'name' => 'Carlos Pereira',
                    'company' => 'Diretor, Corretores SP',
                    'testimonial' => 'Ficamos muito satisfeitos com o suporte técnico e a facilidade de uso da plataforma!',
                    'link' => 'https://example.com/saiba-mais'
                ]
            ]
        ];
    }
}