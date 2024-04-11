@extends('layout.main')


<body>
    @include('include.navbar')
    <div class="container">
        <form action="/transact/store/{{ $transact->message_id }}" method="post">
            @csrf
            <h2></h2>
            <div class="input-group">
                <label for="total">Total Amount Received:</label>
                <input type="number" name="total_amount_received" id="total" placeholder="Enter total amount received">
            </div>
            <div class="input-group">
                <label for="amount">Total Amount Due:</label>
                <input type="number" name="total_amount_due" id="amount" placeholder="Enter total amount due">
            </div>
            <button type="button" onclick="calculateChange()">Calculate Change</button>
            <br><br>
            <label for="total"> Total Change:</label>
            <div id="changeResult"></div>
            <br><br>
            <ul id="history"></ul>
            <button type="submit">Save Transaction</button>
        </form>
    </div>

<style>

    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #bc722c;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #725a4a;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #61381e;
}

#changeResult {
    margin-top: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: white;
}
</style>

<script>
function calculateChange() {
    var totalReceived = parseFloat(document.getElementById("total").value);
    var totalDue = parseFloat(document.getElementById("amount").value);
    var changeResult = document.getElementById("changeResult");
    var historyList = document.getElementById("history");

    if (isNaN(totalReceived) || isNaN(totalDue)) {
        changeResult.innerHTML = "Please enter valid amounts.";
        return;
    }

    if (totalReceived < totalDue) {
        changeResult.innerHTML = "Insufficient amount received. Please enter a larger total.";
        return;
    }

    var changeAmount = totalReceived - totalDue;
    changeResult.innerHTML = "₱" + changeAmount.toFixed(2);

    // Add entry to change history
    var entry = document.createElement("li");
    entry.textContent = "Total Received: ₱" + totalReceived.toFixed(2) + " | Total Due: ₱" + totalDue.toFixed(2) + " | Change: ₱" + changeAmount.toFixed(2);
    historyList.appendChild(entry);
}

</script>
