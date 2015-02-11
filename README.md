Instalação
==========
composer require --dev "mjfavaro/fake:dev-master"



Configuração
============
app/config.php
--------------
* Adicione o Service Provider

  Mjfavaro\Fake\FakeServiceProvider

* Adicione o Aliás

  "Fake" => "Mjfavaro\Fake\Facade"


USO
===
Temos no momento apenas um comando de teste, utilize-o em alguma view, ou no routes.php
Fake::test();