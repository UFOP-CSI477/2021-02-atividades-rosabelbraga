'use strict'


function validar(campo) {

    let n = campo.value;

    if ( n.length == 0) {
        window.alert("Informe o valor corretamente!");
        campo.value = "";
        campo.focus();
        return false;
    }

    return true;

}

function cadastrar() {

    let nome = document.frmDados.nome;
    let sobrenome = document.frmDados.sobrenome;
    let endereco = document.frmDados.endereco;
    let email = document.frmDados.email;

    if ( validar(nome) && validar(sobrenome) && validar(endereco) && validar(email)) {
        carregarDados();
    }

}

function Pessoa(nome, sobrenome, endereco, email) {
    this.nome = nome;
    this.sobrenome = sobrenome;
    this.endereco = endereco;
    this.email = email;
}

function carregarDados(){
    const nome = document.frmDados.nome.value;
    const sobrenome = document.frmDados.sobrenome.value;
    const endereco = document.frmDados.endereco.value;
    const email = document.frmDados.email.value;

    const pessoa = new Pessoa(nome, sobrenome, endereco, email);

    console.log(pessoa);

    window.alert(`Dados carregados com sucesso ${nome} ${sobrenome}!`);

    let obj = {
        name: nome,
        lastname: sobrenome,
        address: endereco,
        e_mail: email
    };

    console.log(obj)

    document.getElementById("nome").innerHTML = `Nome: ${pessoa.nome}`;
    document.getElementById("sobrenome").innerHTML = `Sobrenome: ${pessoa.sobrenome}`;
    document.getElementById("endereco").innerHTML = `Endereço: ${pessoa.endereco}`;
    document.getElementById("email").innerHTML = `Telefone: ${pessoa.email}`;
}