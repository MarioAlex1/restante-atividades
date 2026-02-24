# Sistema Web – Programação Web I

Projeto desenvolvido com Laravel aplicando o padrão MVC, organização de rotas, controllers, views com Blade e reutilização de layout.

## Tecnologias
- PHP 8.4
- Laravel 12
- Blade Template Engine

## Estrutura do Projeto

### Rotas (`routes/web.php`)
- `/` → PrincipalController@index
- `/sobrenos` → SobreNosController@index
- `/contato` → ContatoController@index
- `/login` → LoginController@index
- Grupo com prefixo `/app`:
  - `/app/clientes` → ClienteController@index
  - `/app/fornecedores/{nome}/{status}/{categoria}` → FornecedorController@index
  - `/app/produtos/{nome?}/{preco?}` → ProdutoController@index

### Controllers
- `PrincipalController`, `SobreNosController`, `ContatoController`, `LoginController`
- `ClienteController` – retorna lista de clientes para a view
- `FornecedorController` – recebe parâmetros da URL e envia array para a view
- `ProdutoController` – recebe parâmetros opcionais da URL

### Views
- Todas usam `@extends('layouts.app')` e `@section('content')`
- Layout base em `resources/views/layouts/app.blade.php` com `@yield('content')`
- Menu em `resources/views/partials/menu.blade.php` incluído com `@include`
- `app/clientes.blade.php` – lista clientes com `@foreach` e `@if` para lista vazia
- `app/fornecedores.blade.php` – exibe dados com `{{ }}` e condicional `@if` para status
- `app/produtos.blade.php` – exibe nome e preço formatado ou mensagem padrão

## Como executar

```bash
composer install
php artisan serve
```

Acesse `http://127.0.0.1:8000`

## Exemplos de URL
- `http://127.0.0.1:8000/app/clientes`
- `http://127.0.0.1:8000/app/fornecedores/MinhaEmpresa/ativo/nacional`
- `http://127.0.0.1:8000/app/produtos/Notebook/2999.90`
- `http://127.0.0.1:8000/app/produtos` (sem parâmetros)

## Aluno
Mário Alex, 4º semestre.

IFCE Campus Boa Viagem – ADS – Programação Web I
