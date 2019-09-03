document.getElementById("button-submit").addEventListener("click", function (){
    let r1 = parseFloat(document.getElementById("r1").value);
    let r2 = parseFloat(document.getElementById("r2").value);
    let r3 = parseFloat(document.getElementById("r3").value);
    let error = null;
    if (isNaN(r1) || isNaN(r2) || isNaN(r3)){
        error = "Wpisz poprawną średnią";
    }
    let all_results = [r1,r2,r3];
    let sorted = all_results.sort((a, b) => {return a - b }).reverse();
    if (error !== null) {
        document.getElementById("error").innerHTML = error;
        window.alert(error);
    }else{
        document.getElementById("lowest-awarge").innerHTML = sorted[0];
        document.getElementById("error").innerHTML = "";

    }
}, true);