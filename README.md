## Instalação
composer require --dev "mjfavaro/fake:dev-master"



## Configuração
# app/config.php
* Adicione o Service Provider

  `"Mjfavaro\Fake\FakeServiceProvider"`

* Adicione o Aliás

  `"Fake" => \Mjfavaro\Fake\Support\Facade\Fake::class`


## USO
Temos no momento apenas um comando de teste. Insira no seu arquivo de rotas:

\Mjfavaro\Fake\Fake::helloWorld();

app()->make('fake')->helloWorld();

app('fake')->helloWorld();

Fake::helloWorld(); // Facade