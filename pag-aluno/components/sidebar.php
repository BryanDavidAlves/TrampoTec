<aside id="itens">
    <div id="burguer" onclick="clickmenu()" class="toogle2">
        <span class="menu"></span>
        <span class="menu"></span>
        <span class="menu"></span>
    </div>
    <nav>
        <ul>
            <h2 class="nome-do-aluno border-nome">Johny David Marques Gomes</h2>
            <li class="indice-side">Menu</li>
            <li><a href="#"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="index.php"><i class="fa-solid fa-house"></i> Painel de vagas</a></li>
            <li><a href="processos-seletivos.php"><i class="fa-solid fa-people-group"></i> Processo Seletivo</a></li>
            <li><a href="notificacoes.php"><i class="fa-solid fa-bell" style="color: #ffffff;"></i> Notificações</a></li>
            <li><a href="recomendacoes.php"><i class="fa-solid fa-envelope"></i> Recomendações</a></li></a>
            <li class="indice-side border">Pessoal</li>
            <li><a href="perfil.php"><i class="fa-solid fa-user" style="color: #ffffff;"></i> Meus Dados</a></li>
            <li><a href="curriculo.php"><i class="fa-solid fa-file-invoice" style="color: #ffffff;"></i> Curriculo</a></li>
            <li class="indice-side border">Suporte</li>
            <li><a href="contato.php"><i class="fa-solid fa-headset" style="color: #ffffff;"></i> Fale Conosco</a></li>
            <li><a href="#"><i class="fa-solid fa-gear" style="color: #ffffff;"></i>Configurações</a></li>
            <li><a href="#"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>Sair</a></li>
        </ul>



    </nav>
</aside>
<script>
    
    function clickmenu() {
        if (itens.style.display == 'none') {
            itens.style.display = 'block'
            main.style.display = 'flex'

        } else if (itens.style.display == 'block') {
            itens.style.display='none'

        } else {
            itens.classList.add('show')
            itens.style.display = 'block'
            console.log('nao sei')
        }   
    }
</script>