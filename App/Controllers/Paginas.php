<?php
class Paginas extends Controller{
    public function index(){
      if(Sessao::estaLogado()):
        Url::redirecionar('posts');
      endif;
      $dados = ['titulo'=>'Pagina Inicial',
                 'descricao'=> 'Aula de PHP'
               ];
        $this->view('pagina/home', $dados);
    }
    public function carrinho(){
      $dados = ['titulo'=>'Sobre nós...',
                'descricao'=>'Esta aula é sobre PHP 
                 orientado a objetos com MVC'];
     $this->view('pagina/carrinho', $dados);
    }
    public function login(){
      $dados = ['titulo'=>'Sobre nós...',
                'descricao'=>'Esta aula é sobre PHP 
                 orientado a objetos com MVC'];
     $this->view('pagina/login', $dados);
    }

}//fim da classe Paginas

?>