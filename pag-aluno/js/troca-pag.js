var infoPessoal = document.getElementById("info-pessoal")
var infoAcademica = document.getElementById("info-academica")



function pessoal(){
    infoAcademica.style.display = "none";
    infoPessoal.style.display = "flex";

}

function academica(){
    infoPessoal.style.display = "none";
    infoAcademica.style.display = "flex";
}

