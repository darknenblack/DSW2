function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("cidade");
    filter = input.value.toUpperCase();
    date1 = document.getElementById("data_inicio").value;
    date2 = document.getElementById("data_final").value;
    console.log(filter)
    console.log(date1)
    console.log(date2)
    
    cards = document.getElementsByClassName("cards__item")
    localizacoes = ["Ribeirão Preto", "Serra Negra", "Maresias", "Ilha Grande", "Ubatuba"]
    //console.log(cards[0])
    
    for (i = 0; i < 5; i++){
        if (localizacoes[i].toUpperCase().includes(filter)){
          cards[i].style.display = ""
        }
        else{
          cards[i].style.display = "none"
        }
    }
  }