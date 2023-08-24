function abrirmodal(){
            
    var modal=  document.getElementById('abrir-aluno')

    if (modal.style.display == 'none'){

         modal.style.display = 'block'

    }else if (modal.style.display == 'block'){

        modal.style.display='none'
        
    }
     else{
        modal.style.display = 'block'           
    }

}

function modalseta(){
    
var modalseta=  document.getElementById('abrircandidato')
var modalcandidatoremarcar=  document.getElementById('candidato')

var setabaixo=document.getElementById('setabaixo')

if (modalseta.style.display == 'none'){
    modalcandidatoremarcar.style.display='none'            
     modalseta.style.display = 'block'
     setabaixo.style.transform='rotate(180deg)'
     setabaixo.style.transitionDuration='0.3s'
     

}else if (modalseta.style.display == 'block'){
    modalcandidatoremarcar.style.display='none'
    modalseta.style.display='none'
    setabaixo.style.transform='rotate(0deg)'
    setabaixo.style.transitionDuration='0.3s'
    
}
 else{
    modalseta.style.display = 'block'    
    modalcandidatoremarcar.style.display='none'    
    setabaixo.style.transition='0.5s'
    setabaixo.style.transform='rotate(180deg)'
    setabaixo.style.transitionDuration='0.3s'
}

}


function modalalterar(){
    
var modalalterar=  document.getElementById('abrirvaga')

if (modalalterar.style.display == 'none'){

 modalalterar.style.display = 'block'

}else if (modalalterar.style.display == 'block'){

modalalterar.style.display='none'

}
else{
modalalterar.style.display = 'block'           
}

}

function modalcandidatoremarcar(){
    
var modalcandidatoremarcar=  document.getElementById('candidato')

if (modalcandidatoremarcar.style.display == 'none'){
 modalcandidatoremarcar.style.display = 'block'

}else if (modalcandidatoremarcar.style.display == 'block'){
modalcandidatoremarcar.style.display='none'
}
else{
modalcandidatoremarcar.style.display = 'block'    

}

}

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

    function clickmenu2(){
        if (itens2.style.display == 'none'){
            itens2.style.display = 'block'
            main.style.display ='flex'
        } else if (itens2.style.display == 'block'){
            itens2.style.display = 'none'
            main.style.display ='block'
        }else{
            itens2.style.display = 'block'
            main.style.display ='flex'
           
        }
    }


    function modalreagendar(){
    
        var modalreagendar=  document.getElementById('reagendar')
   

        if (modalreagendar.style.display == 'none'){
            modalreagendar.style.display = 'block'
        
        }else if (modalreagendar.style.display == 'block'){
            modalreagendar.style.display='none'
        }
        else{
            modalreagendar.style.display = 'block'    
        
        }
        
        }


