<?php
    require_once 'DAL/ClienteDAO.php';

    class ClienteModel {
        public ?int $id;
        public ?string $nome;
        public ?string $sobrenome;
        public ?string $email;
        public ?string $telefone;
        public ?string $endereco;
        public ?string $cidade;
        public ?string $estado;
        public ?string $cep;
        public ?string $dataCadastro;


        public function __construct(
            ?int $idCliente = null, 
            ?string $nomeCliente = null,
            ?string $sobrenome = null,
            ?string $email = null,
            ?string $telefone = null,
            ?string $endereco = null,
            ?string $cidade = null,
            ?string $estado = null,
            ?string $cep = null,
            ?string $dataCadastro = null,
        )
        {
            $this->id = $idCliente;
            $this->$nomeCliente = $nomeCliente;
            $this->sobrenome = $sobrenome;
            $this->email = $email;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->cep = $cep;
            $this->dataCadastro = $dataCadastro;

        }

        public function getClientes() {
            $clienteDAO = new clienteDAO();
            $clientes = $clienteDAO->getClientes();

            foreach ($clientes as $chave => $cliente) {
                $clientes[$chave] = new ClienteModel(
                    $cliente['idCliente'],
                    $cliente['nomeCliente'],
                    $cliente['sobrenome'],
                    $cliente['email'],
                    $cliente['telefone'],
                    $cliente['endereco'],
                    $cliente['cidade'],
                    $cliente['estado'],
                    $cliente['cep'],
                    $cliente['dataCadastro']
                    
                );
            }
            return $clientes;
        }
    }
?>