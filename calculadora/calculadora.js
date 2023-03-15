var operand1 = "";
var operand2 = "";
var operator = "";
var result = "";

function addNumber(num) {
    if (operator == "") {
        operand1 += num;
        document.getElementById("result").value = operand1;
    } else {
        operand2 += num;
        document.getElementById("result").value = operand2;
    }
}

function addDecimal() {
    if (operator == "") {
        if (operand1.indexOf(".") == -1) {
            operand1 += ".";
            document.getElementById("result").value = operand1;
        }
    } else {
        if (operand2.indexOf(".") == -1) {
            operand2 += ".";
            document.getElementById("result").value = operand2;
        }
    }
}

function addOperator(op) {
    operator = op;
}

function calculate() {
    var num1 = parseFloat(operand1);
}