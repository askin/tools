function generateTckn() {
    
    let tmpTckn = "" + Math.floor(Math.random() * 10000000000000000)
    let splitTckn = tmpTckn.substr(0, 9).split("").map(numStr => parseInt(numStr));

    let oddTotal = splitTckn[0] + splitTckn[2] + splitTckn[4] + splitTckn[6] + splitTckn[8];
    let evenTotal = splitTckn[1] + splitTckn[3] + splitTckn[5] + splitTckn[7];

    let oddCalculation = ((oddTotal * 7) - evenTotal) % 10;
    splitTckn.push(oddCalculation);

    let first10Total = splitTckn.slice(0, 10).reduce((a, b) => a + b, 0);
    splitTckn.push(first10Total % 10);

    let tckn = splitTckn.join("");

    document.getElementById('tckn').value = tckn;
    validateTckn();
}

function validateTckn() {
    // document.getElementById('gelen').value
    var tckn = document.getElementById('tckn').value;
    if (tckn.length == 0) {
        document.getElementById('validation').innerText = "Empty";
        document.getElementById('validation').style.color = "gray";
    } else {
        let result = checkTckn(tckn);
        if (result) {
            document.getElementById('validation').innerText = "Valid";
            document.getElementById('validation').style.color = "#225533";
        } else {
            document.getElementById('validation').innerText = "Not Valid";
            document.getElementById('validation').style.color = "red";
        }
    }
}

function checkTckn(tckn) {
    if (tckn.length != 11) {
        return false;
    }

    let isnum = /^\d+$/.test(tckn);
    if (!isnum) {
        return false;
    }

    if (tckn[0] == "0") {
        return false;
    }

    let splitTckn = tckn.split("").map(numStr => parseInt(numStr));

    let oddTotal = splitTckn[0] + splitTckn[2] + splitTckn[4] + splitTckn[6] + splitTckn[8];
    let evenTotal = splitTckn[1] + splitTckn[3] + splitTckn[5] + splitTckn[7];

    let oddCalculation = ((oddTotal * 7) - evenTotal) % 10;
    if (oddCalculation != splitTckn[9]) {
        return false;
    }

    let first10Total = splitTckn.slice(0, 10).reduce((a, b) => a + b, 0);
    if (first10Total % 10 != splitTckn[10]) {
        return false
    }

    return true;
}
