let board = document.getElementById("board");
let statusText = document.getElementById("status");
let resetBtn = document.getElementById("resetBtn");

let cells = ["", "", "", "", "", "", "", "", ""];
let currentPlayer = "X";
let gameOver = false;

resetBtn.addEventListener("click", function(){

    board.innerHTML = "";
    cells = ["", "", "", "", "", "", "", "", ""];
    currentPlayer = "X";
    gameOver = false;
    statusText.innerHTML = "Player X's turn";

    for(let i = 0; i < 9; i++){

        let cell = document.createElement("div");
        cell.className = "cell";
        cell.setAttribute("data-index", i);

        cell.addEventListener("click", function(){

            let index = cell.getAttribute("data-index");

            if(cells[index] != "" || gameOver){
                return;
            }

            cell.innerHTML = currentPlayer;
            cells[index] = currentPlayer;

            if(checkWinner()){
                statusText.innerHTML = "Player " + currentPlayer + " wins!";
                gameOver = true;
            } else if(checkDraw()){
                statusText.innerHTML = "It's a draw!";
                gameOver = true;
            } else{
                if(currentPlayer == "X"){
                    currentPlayer = "O";
                } else{
                    currentPlayer = "X";
                }

                statusText.innerHTML = "Player " + currentPlayer + "'s turn";
            }

        });

        board.appendChild(cell);
    }

});

function checkWinner(){

    let wins = [
        [0,1,2],
        [3,4,5],
        [6,7,8],
        [0,3,6],
        [1,4,7],
        [2,5,8],
        [0,4,8],
        [2,4,6]
    ];

    for(let i = 0; i < wins.length; i++){
        let a = wins[i][0];
        let b = wins[i][1];
        let c = wins[i][2];

        if(cells[a] != "" && cells[a] == cells[b] && cells[b] == cells[c]){
            return true;
        }
    }

    return false;
}

function checkDraw(){

    for(let i = 0; i < cells.length; i++){
        if(cells[i] == ""){
            return false;
        }
    }

    return true;
}