# **CSI606-2021-02 - Remoto - Trabalho Final - Resultados**

## *Aluna: Rosabel Braga*

--------------

<!-- Este documento tem como objetivo apresentar o projeto desenvolvido, considerando o que foi definido na proposta e o produto final. -->

### Resumo

  O projeto consiste em um sistema facilitador de doação para projetos independentes que arrecadam mantimentos e distribuem para a população em situação de vulnerabilidade social. Neste será possível o cadastro do projeto, contendo: descrição, e-mail para contato, imagem, link externo que comprova a existência do mesmo e informações para a realização da doação via parceria com supermercados locais ou depósito bancário. Também será possível comentários de pessoas que já contribuíram ou são atendidas pelo mesmo.

### 1. Funcionalidades implementadas
<!-- Descrever as funcionalidades que eram previstas e foram implementas. -->
  * CRUD Administrador;
  * Cadastro de novo projeto;
  * Login usuário;
  * Laravel Telescope.
  
### 2. Funcionalidades previstas e não implementadas
<!-- Descrever as funcionalidades que eram previstas e não foram implementas, apresentando uma breve justificativa do porquê elas não foram incluídas -->
  * CRUD usuário;
  * Busca por projeto e local;
  * Comentário de usuários externos.

### 3. Outras funcionalidades implementadas
<!-- Descrever as funcionalidades implementas além daquelas que foram previstas, caso se aplique.  -->
  * Não se aplica.
### 4. Principais desafios e dificuldades
<!-- Descrever os principais desafios encontrados no desenvolvimento do trabalho, quais foram as dificuldades e como elas foram superadas e resolvidas. -->
  * Conexão com o banco de dados, no sentido de criar os campos adequados. Foi necessário realizar os *migrations* algumas vezes.
  * Aplicação do CRUD.
### 5. Instruções para instalação e execução
<!-- Descrever o que deve ser feito para instalar (ou baixar) a aplicação, o que precisa ser configurando (parâmetros, banco de dados e afins) e como executá-la. -->
  Após extrair a aplicação, é necessário entrar na pasta raiz do projeto e rodar o comando:
   
    1. composer install
  
  Que carrega o processo de auto-load e as bibliotecas/dependencias do projeto.

  Após, deve ser executado o comando para rodar as migrations:

    2. php artisan migrate
   
  Em seguida, com as dependências e a base de dados disponíveis, basta subir a aplicação, aplicando o seguinte comando:

    3. php artisan serve 

### 6. Referências
<!-- Referências podem ser incluídas, caso necessário. Utilize o padrão ABNT. -->
  
  * **Documentação**
    * [Bootstrap](https://getbootstrap.com/docs/5.1/getting-started/introduction/)
    * [Laravel](https://laravel.com/docs/9.x/migrations#column-modifiers)
  * **Repositórios**
    * [CSI606 - Sistemas Web I](https://github.com/fboliveira/CSI477-Sistemas-Web)
    * [Faker](https://github.com/fzaninotto/Faker)