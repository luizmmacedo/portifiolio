<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milena S. M.</title>
    <link rel="stylesheet" href="estiloo.css"> 
    <style>
        /* CSS para o banner rotativo */
        #banner {
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            height: 600px; /* Ajuste a altura conforme necessário */
            overflow: hidden; /* Oculta o conteúdo que sai da área do banner */
            position: relative;
        }

        .carousel {
            display: flex;
            transition: transform 0.5s ease;
            width: 100%; /* Ajuste de acordo com o número de imagens */
        }

        .carousel-item {
            width: 100%; /* Cada item ocupa 100% do espaço */
            flex-shrink: 0; /* Impede que o item encolha */
        }

        .carousel-item img {
            width: 100%; /* Imagem ocupa 100% do espaço do item */
            height: auto; /* Mantém a proporção da imagem */
        }

        .active {
            display: block; /* Exibe a imagem ativa */
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div>
                <br><h1 class="JFK"><strong>Milena da Silva Magenis</strong></h1></br>
            </div>  
            <ul>
                <li><a href="https://www.instagram.com/milesmagg_/?hl=pt-br" target="_blank">Instagram (Pessoal) </a></li>
                <li><a href="https://www.instagram.com/menina.do.all.star.azul/?hl=pt-br" target="_blank">Instagram (Profissional) </a></li>
                <li><a href="https://wa.me/47997817789" target="_blank">WhatsApp</a></li>
                <li><a href="#" target="_blank">História</a></li>
                <li><a href="mailto:milena.magenis@gmail.com" target="_blank" title="milena.magenis@gmail.com">Email</a></li>
                </ul>
        </nav>
    </header>

    <section id="banner">
        <div class="carousel">
            <div class="carousel-item active">
                <img src="img/img1.png" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="img/img2.png" alt="Banner 2">
            </div>
            <div class="carousel-item">
                <img src="img/img3.png" alt="Banner 3">
            </div>
        </div>
    </section>

    <script>
        let currentIndex = 0;
        const items = document.querySelectorAll('.carousel-item');

        function showNextImage() {
            items[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % items.length;
            items[currentIndex].classList.add('active');

            // Move a rolagem
            const carousel = document.querySelector('.carousel');
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        // Troca a imagem a cada 3 segundos
        setInterval(showNextImage, 3000);
    </script>

    <!-- Grid de Pacotes Turísticos -->
    <section id="pacotes">
        <h1 class="pct"><strong>Pacotes Fotográficos</strong></h1>   
        <div class="grid-container">
            <!-- Linha 1 -->
            <div class="grid-item">Pacote 1</div>
            <div class="grid-item">Pacote 2</div>
            <div class="grid-item">Pacote 3</div>
            <div class="grid-item">Pacote 4</div>
            <!-- Linha 2 -->
            <div class="grid-item">Pacote 5</div>
            <div class="grid-item">Pacote 6</div>
            <div class="grid-item">Pacote 7</div>
            <div class="grid-item">Pacote 8</div>
            <!-- Linha 3 -->
            <div class="grid-item">Pacote 9</div>
            <div class="grid-item">Pacote 10</div>
            <div class="grid-item">Pacote 11</div>
            <div class="grid-item">Pacote 12</div>
            <!-- Linha 4 -->
            <div class="grid-item">Pacote 13</div>
            <div class="grid-item">Pacote 14</div>
            <div class="grid-item">Pacote 15</div>
            <div class="grid-item">Pacote 16</div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 MSM  </p>
    </footer>
</body>
</html>
