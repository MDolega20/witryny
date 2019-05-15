function calc() {
    let number = document.getElementById("number").value;
    let stal = document.getElementById("stal").checked;
    let result = null;

    if(number <= 40){
        if(stal === true){
            result = number * 2.7;
        } else {
            result = number * 3;
        }
    }else{
        if (stal === true) {
            result = number * 1.7;
        } else {
            result = number * 2;
        }
    }
    document.getElementById("result").innerText = "Twoje ogłoszenia będą kosztować: "+result+" PLN";
}
