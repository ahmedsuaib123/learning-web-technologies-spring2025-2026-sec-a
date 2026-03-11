let board = document.getElementById("board");
let statusText = document.getElementById("status");
let resetBtn = document.getElementById("resetBtn");

let cells = ["", "", "", "", "", "", "", "", ""];



resetBtn.addEventListener("click", function(){

    board.innerHTML = "";  

    for(let i= 0; i<9; i++){

        let cell = document.createElement("div");
        cell.className="cell";
        cell.setAttribute("data-index", i);

        board.appendChild(cell);
    }

});