// alert('External JS initialized');

function log() {
    alert('Hello world');
}

// log();

// funkcija sa parametrima
function greet(firstName, secondName) {
    alert('Hello: ' + firstName + " " + secondName);
}

// greet('John', 'Smith');

var no = 0;
no = no + 1;
console.log('Vrijednost var no je: ' + no);
no = no - 1;
console.log('Vrijednost var no je: ' + no);
no = 5;
//no--;
no++;
//no = 6
console.log('Vrijednost var no je: ' + no);
// no = no + 5; <==> no += 5;
// no = no - 5; <==> no -= 5;
no += 5;
console.log('Zadnja vrijednost var no je: ' + no);

var randomVar = 'Test VAR';

function printArray(arrayVar) {
    //SCOPE varijabli
    // alert('Variable scope: ' + randomVar);
    for (var i = 0; i < 11; i += 5) {
        console.log('Vrijednost niza je: ' + arrayVar[i]);
    }
}

// testArr =  [1, 2, 3, 4, 5];
// 5 elemenata = duzina niza je 5
// ali pocinje 0
// testArr[5];

var testString = 'Test je ""';

//for petlja
function reversePrintArray(arrayVar) {
    // duzina niza, ide dok ne dodje do kraja niza, i da svaku iteraciju smanjuje za 1
    for (var i = arrayVar.length - 1; i >= 0; i--) {
        console.log('Obrnuta Vrijednost niza na poziciji: ' + i + ' je: ' + arrayVar[i]);
    }
}

var passedFirstArray = ['First Element', 'Second Element', 'Third Element'];
// printArray(passedFirstArray);
printArray(['First Element', 'Second Element', 'Third Element']);

var passedSecondArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
printArray(passedSecondArray);
// printArray([1]);

var passedThirdArray = [1, 2, 3, 4, 5];
// reversePrintArray(passedThirdArray);

function printArrayElements(arrayVar) {
    var i = 0;
    //dok god je vrijednost varijable i < 0
    while (i < arrayVar.length) {
        console.log('While petlja - element niza je: ' + arrayVar[i]);
        i++;
    }
}

printArrayElements(passedThirdArray);

function infiniteLoop() {
    var i = 0;
    while (i > -1) {
        console.log(i);
    }
}

// infiniteLoop();

//if statement
function basicStatement(numberVar) {
    // var test = 0;
    //ukoliko je broj veci od 0
    // var str = '5'; var no = 5; 
    // => str == no => true
    // => str === no => false;
    if (numberVar == 0) {
        alert('Broj: ' + numberVar + ' je jednak 0');
    } else
    if (numberVar > 0) {
        alert('Broj: ' + numberVar + ' je veci od 0');
    } else {
        alert('Broj: ' + numberVar + ' je manji od 0');
    }
}

//switch statement
function switchStatement(numberVar) {
    switch (numberVar) {
        case 0:
            alert('Broj: ' + numberVar + ' je jednak 0');
            break;
        case 5:
            alert('Broj: ' + numberVar + ' je jednak 5');
            break;
        default:
            alert('Broj: ' + numberVar + ' nije ni 0 ni 5');
    }
}