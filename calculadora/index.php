<!DOCTYPE html>
<html>
  <head>
    <title>Calculadora</title>
    <link rel="stylesheet" type="text/css" href="calculator.css">
  </head>
  <body>
    <div class="calculator">
      <div class="display">
        <input type="text" id="result" readonly>
      </div>
      <div class="buttons">
        <button onclick="addNumber('1')">1</button>
        <button onclick="addNumber('2')">2</button>
        <button onclick="addNumber('3')">3</button>
        <button onclick="addOperator('+')">+</button>

        <button onclick="addNumber('4')">4</button>
        <button onclick="addNumber('5')">5</button>
        <button onclick="addNumber('6')">6</button>
        <button onclick="addOperator('-')">-</button>

        <button onclick="addNumber('7')">7</button>
        <button onclick="addNumber('8')">8</button>
        <button onclick="addNumber('9')">9</button>
        <button onclick="addOperator('*')">*</button>

        <button onclick="addNumber('0')">0</button>
        <button onclick="addDecimal()">.</button>
        <button onclick="calculate()">=</button>
        <button onclick="addOperator('/')">/</button>

        <button onclick="clearDisplay()">AC</button>
      </div>
    </div>

    <script src="calculator.js"></script>
  </body>
</html>
