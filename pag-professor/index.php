
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="css/side.css">
    <link rel="stylesheet" href="css/indicacar.css">
    <link rel="stylesheet" href="css/geral.css">
</head>

<body>
    <?php
    include('../pag-professor/components/sidebar.php');
    ?>
    <main class="main">
        <span class="titulo-vagas">Indicaçoes para Alunos</span>
        <img src="" alt="">
        
    </main>

    <section class="sistema-busca">
    <div class="barra-pesquisa">
            <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i>
            <input type="text" name="pesquisa" id="pesquisa" placeholder="">
    </div>        
        <div class="align-filtro"  onclick="abrirFiltro()">
            <div class="filtro" >
            <span   class="material-symbols-outlined">
                    tune
            </span>
                <p >Filtrar</p>
           
            </div>
        </div>
        <div class="modal-filtro" id="abrir-filtro">
            <form action="" > 
                <div class="align-form-filtro">    
                    <label for="">Periodo</label>
                    <input type="checkbox" name="" id="">
                    </div>
                    <div class="align-form-filtro">
                    <label for="">Etec</label>
                    <input type="checkbox" name="" id="">
                    </div> 
                    <div class="align-form-filtro">
                    <label for="">Curso</label>
                    <input type="checkbox" name="" id="">
                    </div> 
                    <div class="align-form-filtro">
                    <label for="">Area</label>
                    <input type="checkbox" name="" id="">
                    </div> 
                    <input type="submit" value="Aplicar" class="button-filtro">

            </form>
        </div>
   
    </section>

    <section class="lista-vagas">
        <div class="tabela">
        <table>
            <th> NOME</th>
            <td>Ryan</td>
        </table>
        <table>
            <th> EMAIL INSTITUCIONAL  </th>
            <td>ryan.souza44@etec.sp.gov.br</td>
        </table>
        <table>
            <th> MENSAGEM</th>
            <td>Me indica, Clodo</td>
        </table>
        </div>

        <div class="icons">
        <i onclick="abrirIndicacao()" class="fa-solid fa-circle-check" style="color: #0c5fed;"></i>
        <i class="fa-solid fa-xmark" style="color: #e00000;"></i>
        
        </div>
        <div class="card-indicacao" id="abrir-indicacao">
                    <div class="align-card-indicacao">
                        <h5 class="title-indicacao">Carta de Indicação</h5>
                        <form class="" action="index.php">
                            <label for="destinatario">Destinatario</label>
                            <input type="email" name="email-professor" id="">
                            <br>
                            <label for="mensagem">Mensagem</label>
                            <textarea name="texto-indicacao" id="" cols="30" rows="10"></textarea>
                            
                            <input type="submit" value="Enviar" class="botao-indicacao">
                            
                        </form>
                    </div>
                </div>
        
    </section>

    <div class="linha"></div>
    


    <section class="lista-vagas">
        <div class="tabela">
        <table>
            <th> NOME</th>
            <td>Ryan</td>
        </table>
        <table>
            <th> EMAIL INSTITUCIONAL  </th>
            <td>ryan.souza44@etec.sp.gov.br</td>
        </table>
        <table>
            <th> MENSAGEM</th>
            <td>Me indica, Clodo</td>
        </table>
        </div>

        <div class="icons">
        <i onclick="abrirIndicacao()"  class="fa-solid fa-circle-check" style="color: #0c5fed;"></i>
        <i class="fa-solid fa-xmark" style="color: #e00000;"></i>
        
        </div>
        <div class="card-indicacao" id="abrir-indicacao">
                    <div class="align-card-indicacao">
                        <h5 class="title-indicacao">Carta de Indicação</h5>
                        <form class="" action="index.php">
                            <label for="destinatario">Destinatario</label>
                            <input type="email" name="email-professor" id="">
                            <br>
                            <label for="mensagem">Mensagem</label>
                            <textarea name="texto-indicacao" id="" cols="30" rows="10"></textarea>
                            
                            <input type="submit" value="Enviar" class="botao-indicacao">
                            
                        </form>
                    </div>
                </div>
        
    </section>

    <div class="linha"></div>
    

    <section class="lista-vagas">
        <div class="tabela">
        <table>
            <th> NOME</th>
            <td>Ryan</td>
        </table>
        <table>
            <th> EMAIL INSTITUCIONAL  </th>
            <td>ryan.souza44@etec.sp.gov.br</td>
        </table>
        <table>
            <th> MENSAGEM</th>
            <td>Me indica, Clodo</td>
        </table>
        </div>

        <div class="icons">
        <i onclick="abrirIndicacao()"  class="fa-solid fa-circle-check" style="color: #0c5fed;"></i>
        <i class="fa-solid fa-xmark" style="color: #e00000;"></i>
        
        </div>
        <div class="card-indicacao" id="abrir-indicacao">
                    <div class="align-card-indicacao">
                        <h5 class="title-indicacao">Carta de Indicação</h5>
                        <form class="" action="index.php">
                            <label for="destinatario">Destinatario</label>
                            <input type="email" name="email-professor" id="">
                            <br>
                            <label for="mensagem">Mensagem</label>
                            <textarea name="texto-indicacao" id="" cols="30" rows="10"></textarea>
                            
                            <input type="submit" value="Enviar" class="botao-indicacao">
                            
                        </form>
                    </div>
                </div>
        
    </section>

    <div class="linha"></div>
    
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
    <script>
         var filtro = document.getElementById('abrir-filtro')
        function abrirFiltro(){
           if(filtro.style.display == "none"){
            filtro.style.display="block"
            filtro.style.transform="translateY(25px)"
            filtro.style.transition="all 5s"
        }
        else if(filtro.style.display="block"){
        filtro.style.display="none"
    }
    else{
        filtro.style.display="block"
    }
}
function abrirIndicacao() {
            var indicar = document.getElementById('abrir-indicacao')
           
            indicar.style.display = "block";
        }

    </script>
</body>