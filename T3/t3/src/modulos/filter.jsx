import '../css/bootstrap.min.css';
import '../css/style.css';
import React, { Component } from "react";

class Filter extends Component{

render(){
    return(
 <div className="row">
 <div className="filter">
   <label className="filter_item">Cidade:</label>
   <input type="text" id="cidade" onkeyup="myFunction()" value={this.input} placeholder="Cidade..."/>
   <label className="filter_item">Data de checkin:</label>
   <input type="date" id="data_inicio" class="filter_date" onchange="myFunction()" />
   <label className="filter_item">Data de checkout:</label>
   <input type="date" id="data_final" class="filter_date" 	onchange ="myFunction()"/>
   
   <button className="btn" onclick= {clearFilter()}> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
     <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
   </svg> </button>
 </div>
</div>
);
}
}

function myFunction() {

    // var input = document.getElementById("cidade");
    // const filter = input.value.toUpperCase();
    // var data_1 = document.getElementById("data_inicio").value;
    // var data2 = document.getElementById("data_final").value;
    // console.log(filter)
    // var data1 = new Date (data_1.replaceAll("-", ","))
    // var data2 = new Date (data2.replaceAll("-", ","))
    
    // var cards = document.getElementsByClassName("col")
    // var localizacoes = document.getElementsByClassName("cidades")
    // var date = document.getElementsByClassName("intervalo")
    
    // for (let i = 0; i < cards.length; i++){
      
    //     if (localizacoes[i].innerHTML.toUpperCase().includes(filter) && ((isNaN(data1) || (data1 >= getdate(date[i],0) && data1 <= getdate(date[i],1))) && (isNaN(data2) || (data2 >= getdate(date[i],0) && data2 <= getdate(date[i],1))))){
    //       cards[i].style.display = ""
    //     }
    //     else{
    //      cards[i].style.display = "none"
    //     }
        
    // }
    // console.log(data1)
    // console.log(getdate(date[0],0))
  }

  function getdate(date, part){
    // var data = date.innerHTML.split("a")[part]
    // var data= data.split("/")
    // var d = new Date (data[2], data[1], data[0])
    // d.setMonth(d.getMonth() - 1);
    // return d
  }

 function clearFilter(){
    // var input = document.getElementById("cidade");
    // var data1 = document.getElementById("data_inicio");
    // var data2 = document.getElementById("data_final");
    // input.value = ""
    // data1.value = ""
    // data2.value = ""
    myFunction()
  }


export default Filter;

