//  "{{url_for('novapromocao')}}"

window.onload = keep_form()

function keep_form (){
    var error = document.getElementsByClassName("keep");
    var input = document.getElementsByClassName("keep_form");
    console.log(error[0].innerHTML)
    console.log(input[0].innerHTML)
    for (i = 0; i < input.length; i++){
        input[i].value += error[i].innerHTML;
    }
}