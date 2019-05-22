function obliczenia(){
    var data = [{
        wynik1: document.getElementById('wynik1'),
        wynik2: document.getElementById('wynik2'),
        wynik3_1: document.getElementById('wynik3'),
        wynik3_2: document.getElementById('wynik4'),
        wynik4: document.getElementById('wynik5'),
        wynik5_1: document.getElementById('wynik6'),
        wynik5_2: document.getElementById('wynik7'),
        wynik5_3: document.getElementById('wynik8')
    },
    {
        liczba1_1: document.getElementById('ok_1_1').value,
        liczba1_2: document.getElementById('ok_1_2').value,
        liczba2_1: document.getElementById('ok_2_1').value,
        liczba2_2: document.getElementById('ok_2_2').value,
        liczba3: document.getElementById('ok_3_1').value,
        liczba4_1: document.getElementById('ok_4_1').value,
        liczba4_2: document.getElementById('ok_4_2').value,
        liczba5_1: document.getElementById('ok_5_1').value,
        liczba5_2: document.getElementById('ok_5_2').value,
        liczba5_3: document.getElementById('ok_5_3').value
    },
    {
        przycisk_1_1: document.getElementById('bt_1_1'),
        przycisk_1_2: document.getElementById('bt_1_2'),
        przycisk_1_3: document.getElementById('bt_1_3'),
        przycisk_1_4: document.getElementById('bt_1_4'),
        przycisk_2_1: document.getElementById('bt_2_1'),
        przycisk_3_1: document.getElementById('bt_3_1'),
        przycisk_4_1: document.getElementById('bt_4_1')
    }];
    
    data[2].przycisk_1_1.addEventListener('click', e =>{
        var l1 = parseInt(document.getElementById('ok_1_1').value),
            l2 = parseInt(document.getElementById('ok_1_2').value);
        data[0].wynik1.innerText =  l1 + l2;
    });
    data[2].przycisk_1_2.addEventListener('click', e =>{
        var l1 = parseInt(document.getElementById('ok_1_1').value),
            l2 = parseInt(document.getElementById('ok_1_2').value);
        data[0].wynik1.innerText =  l1 - l2;
    });
    data[2].przycisk_1_3.addEventListener('click', e =>{
        var l1 = parseInt(document.getElementById('ok_1_1').value),
            l2 = parseInt(document.getElementById('ok_1_2').value);
        data[0].wynik1.innerText =  l1 * l2;
    });
    data[2].przycisk_1_4.addEventListener('click', e =>{
        var l1 = parseInt(document.getElementById('ok_1_1').value),
            l2 = parseInt(document.getElementById('ok_1_2').value);
        data[0].wynik1.innerText =  l1 / l2;
    });
    data[2].przycisk_2_1.addEventListener('click', e =>{
        var l1 = parseInt(document.getElementById('ok_2_1').value),
            l2 = parseInt(document.getElementById('ok_2_2').value);
        for(var x = l1;x < l2+1; x++){
            if(!(x % 2)){
                data[0].wynik2.innerText += (x +'');
            }
        }
    })
    document.getElementById('ok_5_3').addEventListener('blur', e =>{
        var l1 = parseInt(document.getElementById('ok_5_1').value),
            l2 = parseInt(document.getElementById('ok_5_2').value),
            l3 = parseInt(document.getElementById('ok_5_3').value);
        
        if(l1 !== NaN || l2 !== NaN || l3 !== NaN)
        {
            var delta = (l2 * l2) - (4 * l1 * l3);

            if(delta == 0){
                document.getElementById('wynik7').innerText = '1 miejsce zerowe';

            }
            if(delta < 0){
                document.getElementById('wynik7').innerText = 'Brak miejsc zerowych';
            }
            if(delta > 0){
                document.getElementById('wynik7').innerText = '2 miejsca zerowe';
                var delta_pierwiastek = Math.sqrt(delta),
                miejsce1 = (0 - l2 - delta_pierwiastek) / (l1 * 2);
                miejsce1 = miejsce1.toFixed(2);
                miejsce2 = (0 - l2 + delta_pierwiastek) / (l1 * 2);
                miejsce2 = miejsce2.toFixed(2);
                document.getElementById('wynik7').innerText += ' '+miejsce1+' '+miejsce2;

            }
            document.getElementById('wynik6').innerText = delta;

        }
        else
        {
            widow.alert('Wypełnij wszytkie Pola!');
        }
        
    })


};
obliczenia();

