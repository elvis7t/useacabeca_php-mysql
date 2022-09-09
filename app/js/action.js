var titulo = document.querySelector("h1");
titulo.textContent = "TESTE";

var guitar = document.querySelectorAll(".guitar");
console.log(titulo);

for(var i = 0; i < guitar.length; i++){
    var guitare = guitar[i];
    var tdId = guitare.querySelector(".id");
	var id = tdId.textContent;

    var tdName = guitare.querySelector(".name");
	var name = tdName.textContent;

    var tdScore = guitare.querySelector(".score");
	var score = tdScore.textContent;
    var array = JSON.parse("[" + score + "]");
    var array1 = encontraMaior(array);
    
    console.log(array1);
    // var array = [...score];
    // var array1 = encontraMaior(array);
    
    console.log(array);
    // console.log(typeof array[0])
	
    var tdImc = guitare.querySelector(".imc");
    var imc = calculaImc(score);
    tdImc.textContent = imc;
    // guitare.classList.add("bg-success");
	

    
}


function calculaImc(score){
	var imc = 0;
	 if(score > 10000){
        //var tdImc = guitare.classList.add("bg-primary");
        guitare.classList.add("bg-success");
         imc = "Campeao";
        //  tdImc.textContent = imc;
     }else{
        imc = "Perdedor"
     };
	return imc;
}


  function encontraMaior(array) {
    if(array.length < 1) {
       throw new Error('Empty array');
    }
    var maior = array[0]; //mais alto iniciado como o primeiro elemento
    
    for (let i = 1; i < array.length; ++i){
    //           ^--- Começa no segundo pois o primeiro já foi considerado

        //se o valor que tem no momento é maior que o mais alto
        if (array[i] > maior){ 
            maior = array[i]; //atualiza o mais alto
        }
    }
    
    return maior;
}
