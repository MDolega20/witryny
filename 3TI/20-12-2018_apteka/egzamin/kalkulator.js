function(){

};

function oblicz(){
    var x = document.getElementById("wiek").value;
    var y = document.getElementById("dawka").value;
        if(x < 12){
            y = y / 2; 
        }else{
            y = y;
        };
    console.log(x);
    console.log(y);
    document.getElementById("wynik").innerHTML = y ;
};



