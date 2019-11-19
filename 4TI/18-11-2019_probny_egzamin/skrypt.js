document.getElementById("b_sub").addEventListener("click", () => {
    checked = Boolean(document.getElementById("in_c").checked);
    console.log("ZAAKCEPTOWANO: "+checked);
    if(checked){
        imie = document.getElementById("in_i").value;
        email = document.getElementById("in_e").value;
        date = document.getElementById("in_d").value;
        alert(`${imie} ${email} ${date}`);
    }else{
        alert("Nie zaakceptowałeś regulaminu");
    }
}, true);