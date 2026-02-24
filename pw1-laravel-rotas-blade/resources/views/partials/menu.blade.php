    <nav>
        <a href="{{ route('principal') }}">Home</a>
        <a href="{{ route('sobrenos') }}">Sobre</a>
        <a href="{{ route('contato') }}">Contato</a>
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('clientes') }}">Clientes</a>
        <a href="{{ route('fornecedor', ['nome' => 'Empresa', 'status' => 'ativo', 'categoria' => 'nacional']) }}">Fornecedores</a>
        <a href="{{ route('produtos') }}">Produtos</a>
    </nav>