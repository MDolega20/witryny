console.log("Started");
const id = {
    login: "i_l",
    password: "i_p",
    password_2: "i_p2"
};
let user_data = {
    login: null,
    password: null,
    password_repeated: false
}

// login 
// zaczyna sie od litery
// zawiera 3 znaki
// zawiera litery cyfry

// haslo
// musi miec min 8 znakow
// min 3 cyfry
// min 1 znak specjalny

document.getElementById(id.login).addEventListener("change", () => {
    console.log("Login validating");
    let login = document.getElementById(id.login).value,
    r1 = /^[a-z]|[A-Z][0-9]{4}/,
    error = false;
    
    if(!r1.test(login))
        error = true;
    if(login.length < 3)
        error = true;

    if(!error){
        console.log("Login validate sucess");
        user_data.login = login;
    }else{
        console.log("Error found");
        alert("Error found");
    }
}, true);

document.getElementById(id.password).addEventListener("change", () => {
    console.log("Password validating");
    let password = document.getElementById(id.password).value,
    // r1 = /^[a-z]|[A-Z]$/,
    r2 = /[0-9]{3}[!$#@]/,
    error = false;
    
    // if(!r1.test(password))
    //     error = true;
    if(!r2.test(password))
        error = true;
    if(password.length < 8)
        error = true;

    if(!error){
        console.log("Pass validate sucess");
        user_data.password = password;
    }else{
        console.log("Error found");
        alert("Error found");
    }
}, true);

document.getElementById(id.password_2).addEventListener("change", () => {
    console.log("Password 2 validating");
    let password_2 = document.getElementById(id.password_2).value,
    error = false;
    
    if(password_2 !== user_data.password)
        error = true;

    if(!error){
        console.log("Pass validate sucess");
        user_data.password_repeated = true;
    }else{
        console.log("Error found");
        alert("Error found");
    }
}, true);