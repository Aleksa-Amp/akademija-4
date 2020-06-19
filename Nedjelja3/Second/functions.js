// // STRING

// var testString = 'John Smith';

// //Broj karaktera:
// console.log('Broj karaktera: ' + testString.length);

// //Slovo na poziciji
// console.log('Slovo n se nalazi na poziciji: ' + testString.charAt(0));

// //Pozicija slova
// console.log(testString.indexOf('n'));

// // Zamjena slova ili rijeci ili dijela teksta
// console.log(testString.replace('S', 'X'));

// // Uzimanje dijela stringa (od, do)
// console.log(testString.substring(3, 6));

// // Podjela stringa na niz
// var longString = 'John Smith Alice Random';
// console.log(longString.split(' '));

// // Kapitalizuje slova
// console.log(longString.toUpperCase());

// // Smanjuje slova
// console.log(longString.toLowerCase());


// ARRAY

// var arr = ['Red', 'Blue', 'Yellow', 'Green'];

// //Pretvaranje niza u string
// console.log(arr.toString());

// // Dodavanje elementa u niz
// arr.push('White', 'Black');
// console.log(arr.toString());

// arr[arr.length] = 'Silver';
// console.log(arr.toString());

// // Brisanje elemenata
// delete arr[arr.length - 1];
// console.log(arr.toString());
// var tempVar = arr.shift();
// console.log(arr.toString());
// arr.push(tempVar);
// console.log(arr.toString());

// Matematika

// var x = 10 + 5;
// console.log(x);
// var x = 10 - 5;
// console.log(x);
// var x = 10 * 5;
// console.log(x);
// var x = 10 / 5;
// console.log(x);

// var x = 10 % 2;
// console.log(x);

function isDivisible(testVar) {
    if (testVar % 2 == 0) {
        console.log('Djeljiv je sa 2');
        return;
    }
    console.log('Nije djeljiv');
}

// Nasumican broj (od 0 do 1)
// var randomVar = Math.random();
// console.log(randomVar);
// //Zaokruzivanje broja
// console.log(Math.round(1.34));
// // Zaokruzivanje na veci broj
// console.log(Math.ceil(1.00003));
// // Zaokruzivanje na manji broj
// console.log(Math.floor(1.999));

var numArray = [1, 2, 3, 45, 12937, 11];
console.log(Math.max(45, 9));
console.log(Math.min(1, 9));