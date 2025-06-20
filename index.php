<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo Lúcido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f5f5f5;
        }
        
        .cabecalho {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #e1e1e1;
        }
        
        .navegacao {
            margin-top: 15px;
        }
        
        .navegacao a {
            margin: 0 15px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        
        .navegacao a:hover {
            text-decoration: underline;
        }
        
        .conteudo-principal { /* Conteudo Principal está puxando a imagem junto */
            max-width: 1200px;
            margin: 10px auto;
            padding: 0 5%;
            display: flex;
            justify-content: space-between; /* Distribuição inteligente do espaço */
            align-items: flex-start;
            padding-left: 2%;
        }
        
        .destaque {
            flex: 0 1 60%; /* Ocupa 60% do espaço */
            margin-top: 0; /* Remove o negativo que causava desalinhamento */
            padding-right: 20px; /* Espaço interno à direita */
        }


        .destaque h2 {
            font-size: 2.2rem;       /* Aumenta o título */
            margin-bottom: 0.5rem;   /* Espaço após o título */
        }

        .destaque p {
            font-size: 1.2rem;       /* Aumenta o parágrafo */
            line-height: auto;        /* Melhora a legibilidade */
        }
        
        .imagem-produto {
            flex: 1;
            max-width: 35%;
            height: auto;
            margin-top: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .botoes-acao {
            margin-top: 30px;
            display: flex;
            gap: 15px;
        }
        
        .botao {
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .botao-login {
            background-color: #007bff;
            color: white;
        }
        
        .botao-cadastro {
            background-color: #28a745;
            color: white;
        }
        
        .botao:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        
        @media (max-width: 768px) {
            .conteudo-principal {
                flex-direction: column;
            }
            
            .imagem-produto {
                max-width: 80%;
                margin-top: 30px;
            }
        }
    </style>
</head>
<body>
    <header class="cabecalho">
        <h1>Consumo Lúcido</h1>
        <nav class="navegacao">
            <a href="index.php">Home</a>
            <a href="produtos.php">Todos os Produtos</a>
            <a href="sobre.php">Sobre</a>
        </nav>
    </header>

    <main class="conteudo-principal">
        <section class="destaque">
            <h2>Quando Você Opina, Todo Mundo Ganha</h2>
            <p>
                Cada avaliação que você compartilha contribui para decisões de compra mais bem informadas. 
                Ao expressar sua experiência com sinceridade, você ajuda outras pessoas a refletirem melhor antes de comprar. 
                Assim, fortalecemos uma comunidade baseada em confiança, troca de ideias e escolhas mais conscientes.
            </p>
            <div class="botoes-acao">
                <a href="login.php"><button class="botao botao-login" type="button">Fazer Login</button></a>
                <a href="cadastro.php"><button class="botao botao-cadastro" type="button">Inscreva-se</button></a>
            </div>
        </section>
        
        <img class="imagem-produto" src="img-ilust1.png" alt="Ilustração avaliação de produtos">
    </main>
</body>
</html>