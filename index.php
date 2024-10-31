<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATe.C Shopping - Home</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/cabecalhoerodape.css">
</head>
<body>
    <header>
        <div class="top-row">
            <div class="logo">
                <img src="img/logo.png" alt="ATe.C logo">
            </div>
            <nav>
                <a href="index.html" class="nav">Home</a>
                <a href="loja.html" class="nav">Loja</a>
                <a href="contato.html" class="nav">Contato</a>
                <a href="cadastro.html" class="nav">Cadastrar-se/Login</a>  
            </nav>
        </div>
        <div class="search-row">
            <form action="">
                <input type="search" placeholder="Pesquisar...">
                <button type="submit">GO.</button>
            </form>
        </div>
    </header>

    <!-- Área de Exibição -->
    <main>
        <div class="content-container">
            <!-- Destaques de Promoções -->
            <section class="promotions">
                <h2>Destaques de Promoções</h2>
                <div class="promotion-slider">
                    <div class="promotion-slide">
                        <img src="img/promo1.jpg" alt="Promoção 1">
                        <p>Promoção 1: Desconto de 20% em todos os produtos!</p>
                    </div>
                    <div class="promotion-slide">
                        <img src="img/promo2.jpg" alt="Promoção 2">
                        <p>Promoção 2: Compre 1, leve 2 em toda a linha de eletrônicos!</p>
                    </div>
                    <div class="promotion-slide">
                        <img src="img/promo3.jpg" alt="Promoção 3">
                        <p>Promoção 3: Frete grátis em compras acima de R$200!</p>
                    </div>
                    <!-- Adicione mais slides conforme necessário -->
                </div>
                <script>
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.promotion-slide');
        let currentIndex = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        showSlide(currentIndex);
        setInterval(nextSlide, 3000); // Altera o slide a cada 3 segundos
    });
</script>

            </section>
            

            <!-- Filtros de Produtos -->
            <aside class="filters">
                <h2>Filtros de Produtos</h2>
                <form>
                    <label for="category">Categoria:</label>
                    <select id="category" name="category">
                        <option value="all">Todos</option>
                        <option value="electronics">Eletrônicos</option>
                        <option value="clothing">Roupas</option>
                        <option value="home">Casa e Jardim</option>
                    </select>

                    <label for="price">Faixa de Preço:</label>
                    <input type="range" id="price" name="price" min="0" max="1000" step="10" value="500">
                    <p>R$0 - R$1000</p>

                    <label for="rating">Avaliação:</label>
                    <select id="rating" name="rating">
                        <option value="all">Todas</option>
                        <option value="5">5 Estrelas</option>
                        <option value="4">4 Estrelas</option>
                        <option value="3">3 Estrelas</option>
                    </select>

                    <button type="submit">Aplicar Filtros</button>
                </form>
            </aside>

            <!-- Produtos -->
            <section class="products">
                <h2>Produtos</h2>
                <div class="product-list">
                    <!-- Exemplo de produtos -->
                    <div class="product-item">
                        <img src="img/product1.jpg" alt="Produto 1">
                        <h3>Produto 1</h3>
                        <p>Descrição breve do produto.</p>
                        <p>R$99,90</p>
                    </div>
                    <div class="product-item">
                        <img src="img/product2.jpg" alt="Produto 2">
                        <h3>Produto 2</h3>
                        <p>Descrição breve do produto.</p>
                        <p>R$199,90</p>
                    </div>
                    <div class="product-item">
                        <img src="img/product3.jpg" alt="Produto 3">
                        <h3>Produto 3</h3>
                        <p>Descrição breve do produto.</p>
                        <p>R$299,90</p>
                    </div>
                    <div class="product-item">
                        <img src="img/product4.jpg" alt="Produto 4">
                        <h3>Produto 4</h3>
                        <p>Descrição breve do produto.</p>
                        <p>R$399,90</p>
                    </div>
                    <div class="product-item">
                        <img src="img/product5.jpg" alt="Produto 5">
                        <h3>Produto 5</h3>
                        <p>Descrição breve do produto.</p>
                        <p>R$499,90</p>
                    </div>
                    <div class="product-item">
                        <img src="img/product6.jpg" alt="Produto 6">
                        <h3>Produto 6</h3>
                        <p>Descrição breve do produto.</p>
                        <p>R$599,90</p>
                    </div>
                    <div class="product-item">
                        <img src="img/product7.jpg" alt="Produto 7">
                        <h3>Produto 7</h3>
                        <p>Descrição breve do produto.</p>
                        <p>R$699,90</p>
                    </div>
                    <div class="product-item">
                        <img src="img/product8.jpg" alt="Produto 8">
                        <h3>Produto 8</h3>
                        <p>Descrição breve do produto.</p>
                        <p>R$799,90</p>
                    </div>
                    <div class="product-item">
                        <img src="img/product9.jpg" alt="Produto 9">
                        <h3>Produto 9</h3>
                        <p>Descrição breve do produto.</p>
                        <p>R$899,90</p>
                    </div>
                    <div class="product-item">
                        <img src="img/product10.jpg" alt="Produto 10">
                        <h3>Produto 10</h3>
                        <p>Descrição breve do produto.</p>
                        <p>R$999,90</p>
                    </div>
                </div>
            </section>

            <aside class="ads">
                <h2>Anúncios</h2>
                <div class="ad-list">
                    <div class="ad-item">
                        <img src="img/ad1.jpg" alt="Anúncio 1">
                        <p>Anúncio 1</p>
                    </div>
                    <div class="ad-item">
                        <img src="img/ad2.jpg" alt="Anúncio 2">
                        <p>Anúncio 2</p>
                    </div>
                    <div class="ad-item">
                        <img src="img/ad3.jpg" alt="Anúncio 3">
                        <p>Anúncio 3</p>
                    </div>
                    <div class="ad-item">
                        <img src="img/ad4.jpg" alt="Anúncio 4">
                        <p>Anúncio 4</p>
                    </div>
                    <div class="ad-item">
                        <img src="img/ad5.jpg" alt="Anúncio 5">
                        <p>Anúncio 5</p>
                    </div>
                </div>
            </aside>
            
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>Avaliação</h3>
                <textarea placeholder="Escreva sua avaliação aqui"></textarea>
                <button type="button">Enviar</button>
            </div>
            
            <div class="footer-section">
                <h3>Contato</h3>
                <p>Email: contato@exemplo.com</p>
                <p>Telefone: (00) 1234-5678</p>
            </div>
            
            <div class="footer-section">
                <h3>Redes Sociais</h3>
                <a href="https://www.instagram.com">Instagram</a><br>
                <a href="https://www.facebook.com">Facebook</a><br>
                <a href="https://www.whatsapp.com">Whatsapp</a>
            </div>
            <div class="footer-section">
                <h3>Sustentabilidade</h3>
               <a href="sustentabilidade.html"><img src="img/sustentabilidade.png" alt="Capa Sustentabilidade"></a> 
            </div>
        </div>
        <p class="lastline">ATe.C Shopping Virtual | &copy; Direitos autorais reservados</p>
    </footer>
    <?php

function criarBanco($nomeBanco) {
    try {
        // Conecta ou cria o banco de dados se ele não existir
        $conexao = new PDO("sqlite:" . $nomeBanco);
        
        // Configura o modo de erro do PDO para exceções
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo "Banco de dados criado e conectado com sucesso!";
        return $conexao;
    } catch (PDOException $erro) {
        echo "Erro ao criar o banco de dados: " . $erro->getMessage();
        return null;
    }
}

// Cria o banco de dados
$conexao = criarBanco('meubanco.db');
if ($conexao) {
    $conexao = null;
}

?>


</body>
</html>
