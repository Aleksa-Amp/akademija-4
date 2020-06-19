function getDayOfTheWeekI(num) {
    var day = null;
    if (num == 1) {
        day = 'Ponedjeljak';
    } else if (num == 2) {
        day = 'Utorak';
    } else if (num == 3) {
        day = 'Srijeda';
    } else if (num == 4) {
        day = 'Cetvrtak';
    } else if (num == 5) {
        day = 'Petak';
    } else if (num == 6) {
        day = 'Subota';
    } else if (num == 7) {
        day = 'Nedjelja';
    } else {
        console.log('Greska');
        return;
    }
    console.log('Dan u nedjelji je: ' + day);
}

function getDayOfTheWeekS(num) {
    var day = null;
    switch (num) {
        case 1:
            day = 'Ponedjeljak';
            break;
        case 2:
            day = 'Utorak';
            break;
        case 3:
            day = 'Srijeda';
            break;
        case 4:
            day = 'Cetvrtak';
            break;
        case 5:
            day = 'Petak';
            break;
        case 6:
            day = 'Subota';
            break;
        case 7:
            day = 'Nedjelja';
            break;
        default:
            day = 'Greska';
            break;
    }
    console.log('Dan u nedjelji je: ' + day);
}

function greeting(name, surname) {
    var response = 'Zdravo: ' + name + " " + surname;
    return response;
}

function print(result) {
    console.log(result);
}

function arrayTraversal(arr) {
    for (var i = 0; i < arr.lenght; i++) {
        //ako je boja plava i zuta
        if (arr[i] == 'Blue' && arr[i] == 'Yellow') {
            continue;
        }

        //ako je boja crvena ili zelena
        if (arr[i] == 'Red' || arr[i] == 'Green') {
            console.log(arr[i]);
        }
    }
}