<aside id="itens">
        <div id="burguer" onclick="clickmenu()" class="toogle2">
            <span class="menu"></span>
            <span class="menu"></span>
            <span class="menu"></span>
        </div>
    <nav>
        <ul>
            <li><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i> Pesquisar</li>
            <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="#"><i class="fa-solid fa-bullhorn" style="color: #ffffff;"></i> Minhas Vagas</a></li></a>
            <li><a href="processos-seletivos.php"><i class="fa-solid fa-people-group"></i> Processo Seletivo</a></li>
            <li><a href="curriculo.php"><i class="fa-solid fa-file-invoice" style="color: #ffffff;"></i> Curriculo</a></li>
            <li><a href="perfil.php"><i class="fa-solid fa-user" style="color: #ffffff;"></i> Perfil</a></li>
            <li><a href="notificacoes.php"><i class="fa-solid fa-bell" style="color: #ffffff;"></i> Notificações</a></li>
            <li><a href="contato.php"><i class="fa-solid fa-headset" style="color: #ffffff;"></i> Fale Conosco</a></li>
        </ul>
        <div class="end">
            <span><a href="login.php"><i id="first"class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>Sair</a></span>
            <a href="#"><i id="config" class="fa-solid fa-gear" style="color: #ffffff;"></i></a>
        </div>
    </nav>
</aside>
<script>
            function clickmenu(){
                if (itens.style.display == 'none'){
                    itens.style.display = 'block'
                    main.style.display ='flex'
                } else if (itens.style.display == 'block'){
                    itens.style.display = 'none'
                    main.style.display ='block'
                    
                }else{
                    itens.style.display = 'block'
                    main.style.display ='flex'
                   
                }
            }
        </script>
