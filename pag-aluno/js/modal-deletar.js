function modalRemover( $idAluno , $elementoAluno , $curso , $elementoCurso  ){
    const myModal = new bootstrap.Modal('#modalExcluir');
    myModal.show();
    document.getElementById($elementoAluno).value = $idAluno;
    document.getElementById($elementoCurso).value = $curso;
    
    //window.location.href = "./registro.php";
}