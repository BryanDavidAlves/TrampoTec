function habInput() {
    var inputNome = document.getElementById('inputNome')
    var inputNasc = document.getElementById('inputNasc')
    var inputCpf = document.getElementById('inputCpf')
    var inputCelular = document.getElementById('inputCelular')
    var inputTelefone = document.getElementById('inputTelefone')
    var inputLogradouro = document.getElementById('inputLogradouro')
    var inputBairro = document.getElementById('inputBairro')
    var inputEstado = document.getElementById('inputEstado')
    var inputCep = document.getElementById('inputCep')
    var inputNumero = document.getElementById('inputNumero')
    var inputComplemento = document.getElementById('inputComplemento')

    if (inputNome.disabled) {
        inputNome.disabled = false
        inputNasc.disabled = false
        inputCpf.disabled = false
        inputCelular.disabled = false
        inputTelefone.disabled = false
        inputLogradouro.disabled = false
        inputBairro.disabled = false
        inputEstado.disabled = false
        inputCep.disabled = false
        inputNumero.disabled = false
        inputComplemento.disabled = false
        console.log("habilitar")
    } else {
        inputNome.disabled = true
        inputNome.disabled = true
        inputNasc.disabled = true
        inputCpf.disabled = true
        inputCelular.disabled = true
        inputTelefone.disabled = true
        inputLogradouro.disabled = true
        inputBairro.disabled = true
        inputEstado.disabled = true
        inputCep.disabled = true
        inputNumero.disabled = true
        inputComplemento.disabled = true
        console.log("desabilitar")
    }
}