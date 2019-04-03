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
    boats: [
        {
            name: "Łódz 1",
            x: 1,
            y: 1,
            status: true,
            shooted: false
        }
    ],
    drowned_boats: [
        {
            x: 1,
            y: 1
        }
    ]
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
                bot.boats.push(new_boat)
                console.log(x + " " + y);
            }
        }
    }
}
generateBotBoats();

function generateBotBoard(){
    if(bot.board.generated === false){
        let max_x = config.board.width;
        let max_y = config.board.height;

        let board_element = document.createElement("div");

        for(let y = 0; y <= max_y; y++){
            let row_element = document.createElement("div");
            for(let x = 0; x <= max_x; x++){
                let cell_element = document.createElement("span");
                
                //sprawdzanie czy na tym polu jest / był statek

                let boat_here = false;
                let boat_drowned_here = false;

                let element_string;

                bot.boats.drowned_boats.forEach(element => {
                    if(element.x === x && element.y === y){
                        boat_drowned_here = true;
                    }
                });

                if(boat_drowned_here === false){
                    bot.boats.forEach(element => {
                        if(element.x === x && element.y === y){
                            boat_here = true;
                        }
                    });
                }

                switch (true) {
                    case boat_here:
                        element_string = "O";
                        break;
                    case boat_drowned_here:
                        element_string = "X";
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

        document.getElementById("bot_board").appendChild(board_element);
    }
}
// generateBotBoard();