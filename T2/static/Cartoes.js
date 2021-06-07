class promocao {
    constructor(imgs, pousadas, sites, localizacoes, data_inicio, data_final) {
      this.imgs = imgs;
      this.pousadas = pousadas;
      this.sites = sites;
      this.localizacoes = localizacoes;
      this.data_inicio = data_inicio;
      this.data_final = data_final;
    }
}

function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("cidade");
    filter = input.value.toUpperCase();
    date1 = document.getElementById("data_inicio").value;
    date2 = document.getElementById("data_final").value;
    console.log(filter)
    console.log(date1)
    console.log(date2)

    /*
    if (filter === "aqui".toUpperCase()){
        document.getElementById("data_inicio").style.display = "none";
        console.log("entrou")
    }else{
        document.getElementById("data_inicio").style.display = "";

        console.log("nao entrou")
    }
     */
    cards = document.getElementsByClassName("cards")
    nomes = document.getElementsByClassName("nomes")
    for (i = 0; i <5; i++){
        if (nomes[0].innerHTML.includes(filter))
        card = cards[i]
    }



   /* for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }*/
  }