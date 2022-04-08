// Display value
function display(val) {
	document.getElementById("result").value+=val
}

// Evaluate the digit and return result
function solve() {
	let x = document.getElementById("result").value
	let y = eval(x)
	document.getElementById("result").value = y
}

// Clear the display
function clear() {
	document.getElementById("result").value = ""
}