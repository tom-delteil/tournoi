
function tirerAuSort(){
      
   var forms = document.getElementById("playerForms");
   var inputs = forms.getElementsByTagName("input");
   var results = [];
   for (index = 0; index < inputs.length; ++index) {
       
        results[index] = inputs[index].value;

    }
    
   var tour = document.getElementById("premier_tour");
   shuffle(results);
   results.forEach(function(result){

    });
    
    let round = document.querySelector("#round-1");
    let round_1 = document.querySelector("#round-1>li.game-top");
    console.log(round_1);
    
   let player_1 = document.querySelector("#player-1");
   player_1.innerHTML = results[0] + "<span><input type='number' min='0' max='99' onchange='comparateurScore(this, \"#player-2>span>input\")'></input></span>";
   let player_2 = document.querySelector("#player-2");
   player_2.innerHTML = results[1] + '<span><input type="number" min="0" max="99"></input></span>';
   let player_3 = document.querySelector("#player-3");
   player_3.innerHTML = results[2] + '<span><input type="number" min="0" max="99"></input></span>';
   let player_4 = document.querySelector("#player-4");
   player_4.innerHTML = results[3] + '<span><input type="number" min="0" max="99"></input></span>';
   let player_5 = document.querySelector("#player-5");
   player_5.innerHTML = results[4] + '<span><input type="number" min="0" max="99"></input></span>';
   let player_6 = document.querySelector("#player-6");
   player_6.innerHTML = results[5] + '<span><input type="number" min="0" max="99"></input></span>';
   let player_7 = document.querySelector("#player-7");
   player_7.innerHTML = results[6] + '<span><input type="number" min="0" max="99"></input></span>';
   let player_8 = document.querySelector("#player-8");
   player_8.innerHTML = results[7] + '<span><input type="number" min="0" max="99"></input></span>';
   
}

function comparateurScore(input,selecteur){
    
    let inputToCompare = document.querySelector(selecteur);
    console.log(inputToCompare);
    console.log(input.value);
    console.log(inputToCompare.value);
    
    if (input.value >inputToCompare.value){
        console.log("test");
        let player1 = document.getElementById("player1");
        player1.innerHTML = input.parentElement.parentElement.innerText;

    } else {
        console.log("autre");
        let player1 = document.getElementById("player1");
        player1.innerHTML = inputToCompare.parentElement.parentElement.innerText;
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