<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog Incrível</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .blog-post-image {
            max-width: 100%;
            height: auto;
            display: block; /* Remove espaço extra abaixo da imagem */
            margin-bottom: 15px; /* Espaçamento abaixo da imagem */
        }
        .footer-bg {
            background-color: #343a40; /* Cor de fundo para o rodapé */
            color: white; /* Cor do texto para o rodapé */
            padding: 20px 0;
        }
    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Meu Blog Incrível</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-4">
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            Bem-vindo ao meu blog! Fique à vontade para explorar os posts.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h2>Últimas Postagens</h2>
                <hr>

                <?php
                // Array fixo com os dados das postagens
                $posts = [
                    [
                        'titulo' => 'A Revolução da Inteligência Artificial',
                        'data' => '23 de Junho de 2025',
                        'imagem' => 'https://setemargens.com/wp-content/uploads/2024/03/Transumanismo.jpg', // Imagem de exemplo
                        'conteudo' => 'A inteligência artificial está transformando o mundo em um ritmo acelerado. Desde assistentes virtuais até carros autônomos, a IA está presente em quase todos os aspectos de nossas vidas. Exploraremos como essa tecnologia está moldando o futuro e quais são os desafios e oportunidades que ela apresenta. Prepare-se para uma jornada fascinante no universo da IA e suas infinitas possibilidades.
                                       Descubra como algoritmos complexos e aprendizado de máquina estão impulsionando inovações em diversas indústrias. Acompanhe as últimas tendências e desenvolvimentos nesse campo em constante evolução.',
                    ],
                    [
                        'titulo' => 'Guia Essencial para Desenvolvedores Front-end',
                        'data' => '15 de Junho de 2025',
                        'imagem' => 'https://kinsta.com/pt/wp-content/uploads/sites/3/2021/12/front-end-developer-1024x512.png', // Imagem de exemplo
                        'conteudo' => 'Se você está começando no desenvolvimento web, o front-end é um ótimo lugar para iniciar. Com HTML, CSS e JavaScript, você pode criar interfaces de usuário incríveis e interativas. Este guia abordará as ferramentas e frameworks mais populares.
                                       Aprenda sobre as melhores práticas de design responsivo, otimização de performance e acessibilidade para criar experiências digitais de alta qualidade. Explore as últimas tecnologias e tendências que estão moldando o cenário do desenvolvimento front-end.',
                    ],
                    [
                        'titulo' => 'Desvendando os Segredos do Backend com PHP',
                        'data' => '01 de Junho de 2025',
                        'imagem' => 'https://kinsta.com/pt/wp-content/uploads/sites/3/2021/12/back-end-developer-1024x512.png', // Imagem de exemplo
                        'conteudo' => 'PHP continua sendo uma das linguagens mais populares para desenvolvimento web backend. Com sua vasta comunidade e frameworks robustos, é uma escolha poderosa para construir aplicações escaláveis. Vamos explorar seus conceitos.
                                       Entenda como o PHP interage com bancos de dados, lida com requisições HTTP e garante a segurança das suas aplicações web. Descubra os recursos avançados e as bibliotecas que tornam o desenvolvimento backend eficiente e robusto.',
                    ],
                ];

                // Loop para exibir cada postagem
                foreach ($posts as $post) {
                ?>
                    <div class="card mb-4">
                        <img src="<?php echo $post['imagem']; ?>" class="card-img-top blog-post-image" alt="<?php echo $post['titulo']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $post['titulo']; ?></h5>
                            <p class="card-text"><small class="text-muted">Publicado em: <?php echo $post['data']; ?></small></p>
                            <p class="card-text"><?php echo nl2br($post['conteudo']); ?></p>
                            <a href="#" class="btn btn-primary">Leia mais...</a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <div class="col-md-4">
                <div class="card bg-light mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Sobre o Autor</h5>
                        <p class="card-text">Olá! Eu sou a Thaíssa, uma entusiasta de tecnologia e uma eterna estudante. Adoro compartilhar conhecimentos sobre desenvolvimento web, especialmente focado em HTML, CSS, JavaScript e PHP. Meu objetivo é descomplicar a programação e ajudar você a criar projetos incríveis!</p>
                        <p class="card-text"><small class="text-muted">Acompanhe-me para mais dicas e tutoriais.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-bg mt-5">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6">
                    <h5>Contato</h5>
                    <ul class="list-unstyled">
                        <li>Email: contato@meublog.com</li>
                        <li>Telefone: (XX) XXXX-XXXX</li>
                        <li>Endereço: Rua ____, 123 - ____, BR</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>Envie uma mensagem</h5>
                    <form>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Seu nome">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="seu@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" rows="3" placeholder="Sua mensagem"></textarea>
                        </div>
                        <button type="submit" class="btn btn-secondary">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
            <div class="text-center pb-3">
                <p>&copy; 2025 Meu Blog Incrível. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
