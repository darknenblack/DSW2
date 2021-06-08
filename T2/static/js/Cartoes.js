function clearFilter(){
  var input = document.getElementById("cidade");
  var data1 = document.getElementById("data_inicio");
  var data2 = document.getElementById("data_final");
  input.value = ""
  data1.value = ""
  data2.value = ""
  myFunction()
}

function getdate(date, part){
  data = date.innerHTML.split("a")[part]
  data= data.split("/")
  d = new Date (data[2], data[1], data[0])
  d.setMonth(d.getMonth() - 1);
  return d
}

function myFunction() {
    var input = document.getElementById("cidade");
    const filter = input.value.toUpperCase();
    var data1 = document.getElementById("data_inicio").value;
    var data2 = document.getElementById("data_final").value;
    console.log(filter)
    data1 = new Date (data1.replace("-", ","))
    data2 = new Date (data2.replace("-", ","))
    console.log(data1)
    console.log(data2)
    
    cards = document.getElementsByClassName("cards__item")
    localizacoes = ["Ribeirão Preto", "Serra Negra", "Maresias", "Ilha Grande", "Ubatuba"]
    date = document.getElementsByClassName("data")
    //console.log(cards[0])
    
    for (let i = 0; i < 5; i++){
        if (localizacoes[i].toUpperCase().includes(filter) && ((isNaN(data1) || data1 >= getdate(date[i],0)) && (isNaN(data2) || data2 <= getdate(date[i],1)))){
          cards[i].style.display = ""
        }
        else{
          cards[i].style.display = "none"
        }
    }

   
   console.log(getdate(date[0], 1))
   

  }