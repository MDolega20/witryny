let config = {
    board: {
        width: 6,
        height: 6
    },
    boats: {
        number: 10
    }
}
let bot = {
    board: {
        generated: false,
        content: null
    },
    boats: [],
    shoots: [],
    drowned_boats: []
};
let player = {
    board: {
        generated: false,
        content: null
    },
    shoots: [{x: 1, y: 1}],
    boats: [],
    drowned_boats: []
};
function generateBotBoats() {
    let max_x = config.board.width;
    let max_y = config.board.height;
    let boats_number = config.boats.number;

    for(let i = 0; i <= boats_number; i++){
        if(bot.boats.length < boats_number){
            var x = Math.round(Math.random() * (+max_x - +1) + +1); 
            var y = Math.round(Math.random() * (+max_y - +1) + +1);
            let position_EXIST = false;
            bot.boats.forEach(element => {
                if(element.x === x && element.y === y){
                    position_EXIST = true;
                }
            });
            if(position_EXIST === false){
                let new_boat = {
                    x: x,
                    y: y,
                    status: true,
                    schooted: false,
                    name: "[Ko]zaczka[De]stroyer"
                }
                bot.boats.push(new_boat);
            }else{
                i--;
            }
        }
    }
}
function generatePlayerBoats() {
    let max_x = config.board.width;
    let max_y = config.board.height;
    let boats_number = config.boats.number;

    for(let i = 0; i <= boats_number; i++){
        if(player.boats.length < boats_number){
            var x = Math.round(Math.random() * (+max_x - +1) + +1); 
            var y = Math.round(Math.random() * (+max_y - +1) + +1);
            let position_EXIST = false;
            player.boats.forEach(element => {
                if(element.x === x && element.y === y){
                    position_EXIST = true;
                }
            });
            if(position_EXIST === false){
                let new_boat = {
                    x: x,
                    y: y,
                    status: true,
                    schooted: false,
                    name: "[Ko]zaczka[De]stroyer"
                }
                player.boats.push(new_boat)
            }else{
                i--;
            }
        }
    }
}
function generateBotBoard(){
        let max_x = config.board.width;
        let max_y = config.board.height;

        let board_element = document.createElement("div");
        board_element.classList.add("board_container");

        for(let y = 0; y <= max_y; y++){
            let row_element = document.createElement("div");
            row_element.classList.add("board_row");
            for(let x = 0; x <= max_x; x++){
                let cell_element = document.createElement("span");
                cell_element.classList.add("board_cell");
                
                //sprawdzanie czy na tym polu jest / był statek

                let boat_here = false;
                let boat_drowned_here = false;
                let schoot_here = false;

                let element_string;

                bot.drowned_boats.forEach(element => {
                    if(element.x === x && element.y === y){
                        boat_drowned_here = true;
                    }
                });

                if(boat_drowned_here === false){
                    player.shoots.forEach(element => {
                        if(element.x === x && element.y === y){
                            schoot_here = true;
                        }
                    });

                    if(schoot_here === false){
                        bot.boats.forEach(element => {
                            if(element.x === x && element.y === y){
                                boat_here = true;
                            }
                        });
                    }
                }

                switch (true) {
                    case boat_here:
                        element_string = "O";
                        break;
                    case boat_drowned_here:
                        element_string = "X";
                        break;
                    case schoot_here:
                        element_string = "S";
                        break;
                    default:
                        element_string = "_";
                        break;
                }

                cell_element.innerHTML = element_string;

                row_element.appendChild(cell_element);
            }
            board_element.appendChild(row_element);
        }
        document.getElementById("bot_board").innerHTML = "";
        document.getElementById("bot_board").appendChild(board_element);

        let info_element = document.createElement("p");
        info_element.innerHTML = "Liczba statków " + calcBotBoatNumber();
        document.getElementById("bot_info").innerHTML = "";
        document.getElementById("bot_info").appendChild(info_element);
    
}
function generatePlayerBoard(){
        let max_x = config.board.width;
        let max_y = config.board.height;

        let board_element = document.createElement("div");
        board_element.classList.add("board_container");

        for(let y = 0; y <= max_y; y++){
            let row_element = document.createElement("div");
            row_element.classList.add("board_row");
            for(let x = 0; x <= max_x; x++){
                let cell_element = document.createElement("span");
                cell_element.classList.add("board_cell");
                
                //sprawdzanie czy na tym polu jest / był statek

                let boat_here = false;
                let boat_drowned_here = false;
                let schoot_here = false;

                let element_string;

                player.drowned_boats.forEach(element => {
                    if(element.x === x && element.y === y){
                        boat_drowned_here = true;
                    }
                });

                if(boat_drowned_here === false){
                    bot.shoots.forEach(element => {
                        if(element.x === x && element.y === y){
                            schoot_here = true;
                        }
                    });

                    if(schoot_here === false){
                        player.boats.forEach(element => {
                            if(element.x === x && element.y === y){
                                boat_here = true;
                            }
                        });
                    }
                }

                switch (true) {
                    case boat_here:
                        element_string = "O";
                        break;
                    case boat_drowned_here:
                        element_string = "X";
                        break;
                    case schoot_here:
                        element_string = "S";
                        break;
                    default:
                        element_string = "_";
                        break;
                }

                cell_element.innerHTML = element_string;

                row_element.appendChild(cell_element);
            }
            board_element.appendChild(row_element);
        }
        document.getElementById("player_board").innerHTML = "";
        document.getElementById("player_board").appendChild(board_element);

        let info_element = document.createElement("p");
        info_element.innerHTML = "Liczba statków " + calcPlayerBoatNumber();
        document.getElementById("player_info").innerHTML = "";
        document.getElementById("player_info").appendChild(info_element);
        
}
function calcBotBoatNumber(){
    let number = bot.boats.length - bot.drowned_boats.length;
    return number;
}
function calcPlayerBoatNumber(){
    let number = player.boats.length - player.drowned_boats.length;
    return number;
}
function checkPlayerSchoot(x,y){
    bot.boats.forEach(element => {
        if(element.x === x && element.y === y){
            bot.drowned_boats.push({x:x,y:y});
        }
    });
}
function checkBotSchoot(x,y){
    player.boats.forEach(element => {
        if(element.x === x && element.y === y){
            player.drowned_boats.push({x:x,y:y});
        }
    });
}
function playerSchoot() {
    let x = parseInt(document.getElementById("i_x").value);
    let y = parseInt(document.getElementById("i_y").value);

    let x_ok = false;
    let y_ok = false;

    if( x >= 0 && x <= config.board.width ){
        x_ok = true;
    }
    if( y >= 0 && y <= config.board.height ){
        y_ok = true;
    }
    if(x_ok && y_ok){
        let new_schoot = {
            x: x,
            y: y
        }    
        player.shoots.push(new_schoot);
        checkPlayerSchoot(x,y);
        // console.log(player);
        generateBotBoard();
        botSchoot();
    }else{
        console.log("Error");
    }

}
function botSchoot(){
    let schoot_unique = true;
    let schoot = generatePos();
    bot.shoots.forEach(element => {
        if(element.x === schoot.x && element.y === schoot.y){
            schoot_unique = false;
        }
    });
    if(schoot_unique !== true){
        botSchoot();
    }else{
        console.log("Bot strzela");
        bot.shoots.push(schoot);
        checkStatusOfGame();
        checkBotSchoot(schoot.x,schoot.y)
        generatePlayerBoard();
    }
}
function generatePos() {
    let max_x = config.board.width;
    let max_y = config.board.height;
    var x = Math.round(Math.random() * max_x); 
    var y = Math.round(Math.random() * max_y);
    return {x:x,y:y};
}
function resetAll(){
    bot.shoots = [];
    bot.boats = [];
    bot.drowned_boats = [];
    player.shoots = [];
    player.boats = [];
    player.drowned_boats = [];
    generateBotBoats();
    generatePlayerBoats();
    generateBotBoard();
    generatePlayerBoard();
}
function checkStatusOfGame(){
    if(bot.boats.length - bot.drowned_boats.length <= 0){
        alert("Wygrales");
    }
    if(player.boats.length - player.drowned_boats.length <= 0){
        alert("Przegrales");
    }
}

resetAll();

document.getElementById("shoot").addEventListener("click", playerSchoot, false);