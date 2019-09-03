function obliczenia_1(){
    var button = document.getElementById("button");
    var wynik = document.getSelection("#wynik").innerHtml;

    button.addEventListener("click", function(){
        var a = parseInt(document.querySelector('input[name="liczba1"]').value);
        var b = parseInt(document.querySelector('input[name="liczba2"]').value);
        var h = parseInt(document.querySelector('input[name="liczba3"]').value);

        var wynik1 = 2 * (a*b+b*h+a*h);
        console.log( wynik1 );
        document.querySelector("#wynik").innerHTML= wynik1;
    }, false);
};
obliczenia_1()