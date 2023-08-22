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

     function modal2(){
            
        var modal2=  document.getElementById('abrircandidato')
        var modal4=  document.getElementById('candidato')

        if (modal2.style.display == 'none'){
            modal4.style.display='none'
             modal2.style.display = 'block'

        }else if (modal2.style.display == 'block'){
            modal4.style.display='none'
            modal2.style.display='none'
            
        }
         else{
            modal2.style.display = 'block'    
            modal4.style.display='none'       
        }

 }


 function modal3(){
            
    var modal3=  document.getElementById('abrirvaga')

    if (modal3.style.display == 'none'){

         modal3.style.display = 'block'

    }else if (modal3.style.display == 'block'){

        modal3.style.display='none'
        
    }
     else{
        modal3.style.display = 'block'           
    }

}

function modal4(){
            
    var modal4=  document.getElementById('candidato')

    if (modal4.style.display == 'none'){
         modal4.style.display = 'block'


    }else if (modal4.style.display == 'block'){
        modal4.style.display='none'
    }
     else{
        modal4.style.display = 'block'    
     
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
