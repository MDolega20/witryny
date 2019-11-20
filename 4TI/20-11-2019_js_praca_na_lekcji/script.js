console.log("JS ready");

document.getElementById("z_1_b").addEventListener("click", () => {
    console.log("Button 1 clicked");
    let wykladnik = Number(document.getElementById("z_1_i").value);
    let l = Math.pow(2, wykladnik);
    document.getElementById("z_1_b").innerHTML = l;
}, true);

document.getElementById("z_2_b").addEventListener("click", () => {
    console.log("Button 2 clicked");
    let plec = document.getElementsByName("z_2_i_2");
    plec.forEach(element => {
        if(element.checked){
            plec = element.value;
        }
    });
    let res = "Dzien dobry, ";
    if(plec == "k")
        res += "Pani";
    else
        res += "Panie";
    res += " " + document.getElementById("z_2_i_1").value;
    document.getElementById("z_2_r").innerHTML = res;

}, true);

document.getElementById("z_3_b").addEventListener("click", () => {
    console.log("Button 3 clicked");
    let x = Number(document.getElementById("z_3_i_1").value);
    let y= Number(document.getElementById("z_3_i_2").value);
    let z = Number(document.getElementById("z_3_i_3").value);
    document.getElementById("z_3_r").innerHTML = "Do basenu trzeba wlac " + (x * (y - 0.1) * z) + "m<sup>2</sup> wody";
}, true);

let zakupy = [{
    name: "dlugopis",
    ilosc: 3,
    price: 4,
    sum: 12
}];
document.getElementById("z_4_b").addEventListener("click", ()=>{
    console.log("Button clicked");
    let type = Number(document.getElementById("z_4_i_1").value);
    let ilosc = Number(document.getElementById("z_4_i_2").value);
    let name, price;

    switch (type) {
        case 1:
            name = "linijka",
            price = 4.60;
            break;
        case 2:
            name = "linijka",
            price = 2.60;
            break;
        case 3:
            name = "zeszyt w kratke",
            price = 8.60;
            break;
    
        default:
            name = "nothing",
            price = 1;
            break;
    }
    item = {
        name: name,
        ilosc: ilosc,
        price: price,
        sum: price * ilosc
    }

    zakupy.push(item);
    let suma = 0;

    let result = document.createElement("div");
    zakupy.forEach(el => {
        let tmp = document.createElement("p");
        tmp.innerHTML = el.name + " " + el.ilosc + " x " + el.price + " zl = " + el.sum + " zl";
        result.appendChild(tmp);
        suma += el.sum;
    });
    result.appendChild(document.createElement("br"));
    let tmp = document.createElement("p");
    tmp.innerHTML = "SUMA: " + suma +" zl";
    result.appendChild(tmp);
    document.getElementById("z_4_r").innerHTML = "";
    document.getElementById("z_4_r").appendChild(result);

    

},true);