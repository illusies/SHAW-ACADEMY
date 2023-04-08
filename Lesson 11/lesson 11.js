var mark = prompt("Enter your mark to receive your grade");

if (mark >= 90) {
  alert("Congratulations! You obtained an A!");
} else if (mark >= 80) {
  alert("Well done! You obtained a B!");
} else if (mark >= 70) {
  alert("Not bad! You obtained a C!");
} else if (mark >= 60) {
  alert("Hmm... You obtained a D! Better luck next time!");
} else if (mark >= 0 && mark <= 59) {
  alert("C'mon! You can do better than obtaiing an F");
} else {
  alert("You have entered an invalid mark!");
}
