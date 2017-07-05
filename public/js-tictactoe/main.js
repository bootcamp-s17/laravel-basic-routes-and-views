// Globals
var notification = document.getElementById('notification');
var winnerMessage = document.getElementById('winnerMessage');
var restartButton = document.getElementById('restartButton');
var spaces = document.getElementsByClassName("space");
var turn = 0;
var symbols = ['O', 'X'];

// Waits for page to load before firing
document.onreadystatechange = function () {
    if (document.readyState == "interactive") {
      // Initialize your application or run some code.
      restartButton.onclick = startGame;
      startGame();
    }
};

function startGame() {

  // Reset turn counter
  turn = 0;
  
  // Blank out the spaces
  for (i = 0; i < spaces.length; i++) {
    spaces[i].innerHTML = '';
  }

  // Add click events
  for (i = 0; i < spaces.length; i++) {
    spaces[i].addEventListener("click", takeSpace);
  }

  // Remove winner notification
  winnerMessage.innerHTML = '';
  notification.style.display = 'none';

}

function takeSpace() {

  turn++;
  currentSymbol = turn % 2;
  this.innerHTML = symbols[currentSymbol];
  this.removeEventListener("click", takeSpace);
  if (gameOver()) {
    win(currentSymbol);
  }
  
}

function gameOver() {
  
  // Spaces:
  //   0  1  2
  //   3  4  5
  //   6  7  8

  return (
    checkForWin([0,1,2]) ||
    checkForWin([0,3,6]) ||
    checkForWin([0,4,8]) ||
    checkForWin([1,4,7]) ||
    checkForWin([2,5,8]) ||
    checkForWin([3,4,5]) ||
    checkForWin([6,7,8]) ||
    checkForWin([2,4,6]))

}

function checkForWin(line) {

  // Is this line full of the same symbols?
  var first = spaces[line[0]].innerHTML;
  if (first === '') {
    // First space is blank, no winner
    return false;
  }
  else {
    // Check to see if the rest of the spaces match the first
    for (i = 1; i < line.length; i++) {
      if (first !== spaces[line[i]].innerHTML) {
        return false;
      }
    }
  }

  // We made it to here? WINNER!
  return true;

}

function win(winner) {
  
  // Notify players
  winnerMessage.innerHTML = symbols[winner] + " wins!";
  notification.style.display = 'block';

}
