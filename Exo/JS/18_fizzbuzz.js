// Solution utilisant une série de if/else
for (var nombre = 1; nombre <= 100; nombre++) {
  if (nombre % 3 === 0 && nombre % 5 === 0) document.write("FizzBuzz<br>");
  else if (nombre % 3 === 0) document.write("Fizz<br>");
  else if (nombre % 5 === 0) document.write("Buzz<br>");
  else document.write(nombre + "<br>");
}
