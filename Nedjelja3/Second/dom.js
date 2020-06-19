function manipulateDomCss() {
    //Uzeo element sa id-em main i smjestio u varijablu
    var x = document.getElementById('main');
    // var y = document.getElementsByClassName('main');
    x.style.backgroundColor = 'Blue';
    x.style.color = 'red';
    console.log('Boja teksta je: ' + x.style.color);
}

// manipulateDomCss();

function getInputValue() {
    var x = document.getElementById('text');
    var errorVar = document.getElementById('error');
    var inputValue = x.value;
    // console.log('Tekst je' + errorVar.innerHTML);
    // console.log('Vrijednost inputa je: ' + inputValue);
    if (inputValue.length < 5) {
        errorVar.style.color = 'red';
        errorVar.innerHTML = 'Broj karaktera je manji od 5';
        // alert('Broj karaktera je manji od 5');
        return;
    } else if (!inputValue.includes('@')) {
        errorVar.style.color = 'red';
        errorVar.innerHTML = 'Tekst mora da sadrzi @';
        return;
    }
    errorVar.innerHTML = '';
    alert('Validacija je uspjesna!')
}

document.getElementById('submit-btn').onclick = function() {
        getInputValue();
        manipulateDomCss();
    }
    //---------------------------------

function checkLength(inputValue, errorOutput, minLength) {
    if (inputValue.length < minLength) {
        console.log('Broj karaktera je manji od ' + minLength);
        errorOutput.style.color = 'red';
        errorOutput.innerHTML = 'Broj karaktera je manji od ' + minLength;
        return;
    }
    errorOutput.innerHTML = '';
    console.log('Uspjesna validacija!');
}

function getInputValue() {
    var x = document.getElementById('text');
    var errorVar = document.getElementById('error');
    var inputValue = x.value;
    checkLength(inputValue, errorVar, 5);
}

function getSecondInput() {
    var x = document.getElementById('second-text');
    var errorVar = document.getElementById('second-error');
    var inputValue = x.value;
    checkLength(inputValue, errorVar, 15);
}


document.getElementById('second-btn').onclick = function() {
    getInputValue();
    getSecondInput();
}

// document.getElementById('submit-btn').addEventListener('click', getInputValue(), manipulateDomCss());