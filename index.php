<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Chave do Tempo</title>
    <link rel="stylesheet" href="css/principal.css">
</head>
<body>
    <header>
        <div class="cabecalho">
            <h1><img src="assets/Banners/LogoCabecalho.png" alt="" width="70%"></h1>
        </div>
        <ul>
            <li><a href="#apresentacao" class="list-cabecalho">Apresentacao</a></li>
            <li><a href="#novidades" class="list-cabecalho">Novidade</a></li>
            <li><a href="#contato" class="list-cabecalho">Contato</a></li>
            <li><a href="#sugestao" class="list-cabecalho">Sugestao</a></li>
        </ul>
    </header>
    <main>
        <section id="apresentacao">
            <h1 id="bemVindo">Seja bem vindo!!</h1>
            <div class="apresentacao">
                <img src="assets/Banners/logo.png" alt="" width="300px">
                <p>
                    A tranquila (...) nunca foi mais a mesma, <br>
                    terríveis acontecimentos nunca vistos deixaram <br>
                    todos os habitantes da região com medo. Seu objetivo <br>
                    não é somente cortá-la o mais rapido possivel, mas tambem <br>
                    vencer seu luto, se aventurar por toda (...), criar amizades <br>
                    e vínculos, fazer pequenos e grander trabalhos e atividades.
                </p>
            </div>
        </section>
        <section id="novidades">
            <h1>NAO PERCA AS NOVIDADES!!</h1>
            <div class="novidade">
                <div>
                    <p>
                        Fique por dentro das novidades e não <br>
                        perca nada, nessa jornada nao aconcelhamos <br>
                        voce a ficar de fora do que esta para chegar. <br>
                        Seja o mais informado e isso lhe ajudara...
                    </p>
                </div>
                <div>
                    <a href="#novidade"><input type="button" value="Conferir novidades"></a>
                </div>
            </div>
        </section>
        <section id="sugestao">
            <h1>Voce tem alguma sujestão para nós?</h1>
            <form action="">
                <textarea name="sugestao" id="text-sugestao" cols="30" rows="5" placeholder="Nos de uma sugestão..."></textarea>
                <input type="submit" value="enviar sugestao" id="enviar-sugestao">
            </form>
        </section>
        <section id="contato">
            <div id="title-contato">
                <h1>Entre em contato!</h1>
                <p>
                    Nos acompanhe nas redes sociais <br>
                    e entre em contato conosco por uma delas!                
                </p>
            </div>
            <ul id="redes-sociais">
                <li><a href="https://discord.gg/YxY6Tddx"><i class="fa-brands fa-discord" id="discord"></i></a></li>
                <li><a href="https://bit.ly/hi_graph" target="_blank"><i class="fa-brands fa-tiktok" id="tiktok"></i></a></li>
                <li><a href="https://bit.ly/hi_graph_" target="_blank"><i class="fa-brands fa-instagram" id="instagram"></i></a></li>
                <li><a href="https://bit.ly/j1_olly" target="_blank"><i class="fa-brands fa-twitter" id="twitter"></i></a></li>
            </ul>
            <p id="copy">By: LOHAGHOST</p>
        </section>
    </main>


    <script src="https://kit.fontawesome.com/bd05d3cb8c.js" crossorigin="anonymous"></script>
</body>
</html>