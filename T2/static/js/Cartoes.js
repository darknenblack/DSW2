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
    var data_1 = document.getElementById("data_inicio").value;
    var data2 = document.getElementById("data_final").value;
    console.log(filter)
    data1 = new Date (data_1.replaceAll("-", ","))
    data2 = new Date (data2.replaceAll("-", ","))
    
    cards = document.getElementsByClassName("col")
    localizacoes = document.getElementsByClassName("cidades")
    date = document.getElementsByClassName("intervalo")
    
    for (let i = 0; i < cards.length; i++){
      
        if (localizacoes[i].innerHTML.toUpperCase().includes(filter) && ((isNaN(data1) || (data1 >= getdate(date[i],0) && data1 <= getdate(date[i],1))) && (isNaN(data2) || (data2 >= getdate(date[i],0) && data2 <= getdate(date[i],1))))){
          cards[i].style.display = ""
        }
        else{
          cards[i].style.display = "none"
        }
        
    }
    console.log(data1)
    console.log(getdate(date[0],0))
  }