var i = 0
var listaOperacao=[]

function limparSelecao(campo){
    while(campo.lenght > 1){
        campo.remove(1)
    }
}

function TransacaoCliente(operacao, valor){
    this.operacao = operacao
    this.valor = valor
}

function SaldoCliente(saldo){
    this.saldo = saldo
}

function preencherBancos(data){
    let banco = document.getElementById('banco')
    limparSelecao(banco)

    for (let index in data){
        const {code, fullName} = data[index]

        let option = document.createElement("option")
        option.value = code
        option.innerHTML = fullName

        banco.appendChild(option)
    }
}

function carregarBancos(){
    fetch("https://brasilapi.com.br/api/banks/v1")
    .then(response => response.json())
        .then(data => preencherBancos(data))
        .catch(error => console.error(error))
}

function validarChavePix(campo){
    let n = campo.value
    if (n.lenght === 0){
        window.alert('Insira a chave pix')
        campo.classList.add('is-invalid')
        campo.value = ""
        campo.focus()
        return false
    }
    campo.classList.remove('is-invalid')
    campo.classList.add('is-valid')
    return true
}

function validarTipoChave(){
    let chaveTipo = document.getElementById('chaveTipo')
    if (chaveTipo.value == ""){
        window.alert('Selecione o tipo de chave')
        chaveTipo.focus()
    } else {
        chaveTipo.classList.remove('is-invalid')
        chaveTipo.classList.add('is-valid')
        return true
    }
}

function validarBanco(){
    let banco = document.getElementById('banco')
    if (banco.value == ""){
        window.alert('Selecione o banco')
        banco.focus()
    } else {
        banco.classList.remove('is-invalid')
        banco.classList.add('is-valid')
        return true
    }
}

function validarTipoOperacao(){
    let operacao = document.getElementById('operacao')
    if (operacao.value == ""){
        window.alert('Selecione o tipo de operação')
        operacao.focus()
    } else {
        operacao.classList.remove('is-invalid')
        operacao.classList.add('is-valid')
        return true
    }
}

function validarValor(campo){
    let n = campo.value
    if (n.lenght === 0 || isNaN(parseFloat(n))){
        window.alert('Insira o valor da transação')
        campo.classList.add('is-invalid')
        campo.value = "";
        campo.focus()
        return false
    }
    campo.classList.remove('is-invalid')
    campo.classList.add('is-valid')
    return true
}

function validarData(campo){
    let n = campo.value
    var dataCorrente = new Date()
    var data = new Date(data)

    if (n.lenght === 0 || data < dataCorrente){
        window.alert('Insira uma data válida')
        campo.classList.add('is-invalid')
        campo.value = ""
        campo.focus()
        return false
    } else {
        campo.classList.remove('is-invalid')
        campo.classList.add('is-valid')
        return true
    }
}

function adicionarTransacao(){
    let operacao = document.getElementById('operacao')
    let valor = document.getElementById('valor')

    if(validarTipoChave(chaveTipo) && validarChavePix(chavePix) && validarBanco(banco) && validarTipoOperacao(operacao) && validarValor(valor) && validarData(data)){
        var tabelaOperacao = document.createElement('tr')
        tabelaOperacao.insertCell(0).innerHTML = operacao.value
        tabelaOperacao.insertCell(1).innerHTML = valor.value

        const T = new TransacaoCliente(operacao.value, valor.value)

        listaOperacao.push(t)
        console.log(listaOperacao)

        document.getElementById('tabelaOperacao').appendChild(tabelaOperacao)
    }
}

function finalizar(){
    let saldo = 0.0
    let saldoEnvio = 0.0
    let saldoRecebimento = 0.0

    for(i = 0; i < listaOperacao.length; i++){
        if(listaOperacao[i].operacao == 'envio'){
            saldoEnvio += parseFloat(listaOperacao[i].valor) 
        } else if (listaOperacao[i].operacao == 'recebimento'){
            saldoRecebimento += parseFloat(listaOperacao[i].valor)
        }
    }

    saldo = saldoRecebimento - saldoEnvio
    console.log(saldo)

    var tabelaOperacao = document.createElement('tr')
    tabelaOperacao.insertCell(0).innerHTML = saldo
    console.log(tabelaOperacao)

    const saldo2 = new SaldoCliente()
    listaOperacao.push(saldo2)
    console.log(listaOperacao)
    document.getElementById('tabelaSaldoFinal').appendChild(tabelaOperacao)
}

function limpar(){
    location.reload()
}
