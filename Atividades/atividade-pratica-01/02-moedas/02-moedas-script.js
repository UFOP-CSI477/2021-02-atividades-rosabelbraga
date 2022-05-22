const entradaMoeda = document.getElementById("tipoMoedaConversao")

function converter(){
  var entradaTipoMoeda = document.getElementById("tipoMoedaOriginal")
  var tipoMoedaOriginal =
    entradaTipoMoeda.options[entradaTipoMoeda.selectedIndex].value

  var entradaMoeda = document.getElementById("tipoMoedaConversao")
  var tipoMoedaConversao =
    entradaMoeda.options[entradaMoeda.selectedIndex].value

  var valorOriginal = document.getElementById("valorOriginal").value

  if (tipoMoedaOriginal == tipoMoedaConversao || tipoMoedaOriginal <= 0){
    window.alert(
      "Insira dados válidos"
    )
  }

  if (tipoMoedaOriginal == "BRL"){
    carregarValores(tipoMoedaOriginal, tipoMoedaConversao, valorOriginal)
  }

  if (tipoMoedaOriginal == "USD"){
    carregarValores(tipoMoedaOriginal, tipoMoedaConversao, valorOriginal)
  }

  if (tipoMoedaOriginal == "EUR"){
    carregarValores(tipoMoedaOriginal, tipoMoedaConversao, valorOriginal)
  }
}

function carregarValores(tipoMoedaOriginal, tipoMoedaConversao, value){
  var url =
    "https://economia.awesomeapi.com.br/json/daily/" +
    tipoMoedaOriginal +
    "-" +
    tipoMoedaConversao

  fetch(url)
    .then((response) => response.json())
    .then((data) => calcularValor(data, value))
    .catch((error) => console.error(error))
}

function calcularValor(data, value){
  var resultado = Number(data[0]["high"]) * Number(value)

  document.getElementById("valorConvertido").value = resultado

  console.log(resultado)
}

function limpar(){
  location.reload()
}