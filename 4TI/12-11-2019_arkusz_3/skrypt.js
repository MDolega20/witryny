
function calc(jed){
    temp = Number(document.getElementById("temp").value)

    if(!checkInt(temp)){
        alert("BŁAD nie int")
        return false;
    }

    if(jed == "k"){
        wynik = temp + 273,15;
    }else if(jed == "f"){
        wynik = (temp * 1.8) + 32;
    }

    document.getElementById("wynik").innerHTML = (wynik)
    
}


function checkInt(number){
    if(Number.isInteger(number)){
        return true;
    }else{
        return false;
    }
}

document.getElementById("k").addEventListener("click", () => {
    calc("k")
}, true);
document.getElementById("f").addEventListener("click", () => {
    calc("f")
}, true);