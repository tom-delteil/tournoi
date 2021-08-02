
function tirerAuSort(){
      
   var forms = document.getElementById("playerForms");
   var inputs = forms.getElementsByTagName("input");
   var results = [];
   for (index = 0; index < inputs.length; ++index) {
       
        results[index] = inputs[index].value;

    }
    
   let tour = document.getElementById("premier_tour");
   shuffle(results);
   results.forEach(function(result){

    });
    
    let round = document.querySelector("#round-1");
    let round_1 = document.querySelector("#round-1>li.game-top>span.allPlayer");
    console.log(round_1);
    
   let player_1 = document.querySelector("#player-1");
   player_1.innerHTML = results[0];
   let player_2 = document.querySelector("#player-2");
   player_2.innerHTML = results[1];
   let player_3 = document.querySelector("#player-3");
   player_3.innerHTML = results[2];
   let player_4 = document.querySelector("#player-4");
   player_4.innerHTML = results[3];
   let player_5 = document.querySelector("#player-5");
   player_5.innerHTML = results[4];
   let player_6 = document.querySelector("#player-6");
   player_6.innerHTML = results[5];
   let player_7 = document.querySelector("#player-7");
   player_7.innerHTML = results[6];
   let player_8 = document.querySelector("#player-8");
   player_8.innerHTML = results[7];
   
}

function comparateurScore(input,selecteur, destinationId){
    
    let inputToCompare = document.querySelector(selecteur);
//    console.log(inputToCompare);
//    console.log(input.value);
//    console.log(inputToCompare.value);
    
    if (input.value >inputToCompare.value){
//        console.log("test");
        let player1 = document.getElementById(destinationId);
        player1.innerText = input.parentElement.innerText;

    } else {
//        console.log("autre");
        let player1 = document.getElementById(destinationId);
        player1.innerText = inputToCompare.parentElement.innerText;
    }
    
}

function shuffle(array){
  array.sort(() => Math.random() - 0.5);
}
    
//function roundCondition(a,b){
//    if ("a">"b"){
//        let player1 = document.querySelector("player1");
//        player1.innerHTML = results[0];
//    } else {
//        let player1 = document.querySelector("player2");
//        player2.innerHTML = results[1];
//    }
//}