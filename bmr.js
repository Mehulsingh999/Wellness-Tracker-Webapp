function calBMR() {
    var weight = parseFloat(document.bmrform.weight.value);

    var height = parseFloat(document.bmrform.height.value);

    var age = parseInt(document.bmrform.age.value);

    if (document.getElementById("Male").checked == true) {
        var bmr = (10 * weight) + (6.25 * height) - (5 * age) + 5;
    } else if (document.getElementById("Female").checked == true) {
        var bmr =  (10 * weight) + (6.25 * height) - (5 * age) - 161;
    } else {
        alert("Please Select Gender")
    }

    document.bmrform.bmr.value = Math.round(bmr * 100) / 100.0;

    // return bmr;
}

function calTDEE_1(bmr) {
    tdee = bmr * 1.2
    document.bmrform.tdee.value = Math.round(tdee * 100) / 100.0;
}

function calTDEE_2(bmr) {
    tdee = bmr * 1.375
    document.bmrform.tdee.value = Math.round(tdee * 100) / 100.0;
}

function calTDEE_3(bmr) {
    tdee = bmr * 1.55
    document.bmrform.tdee.value = Math.round(tdee * 100) / 100.0;
}

function calTDEE_4(bmr) {
    tdee = bmr * 1.725
    document.bmrform.tdee.value = Math.round(tdee * 100) / 100.0;
}

function calTDEE_5(bmr) {
    tdee = bmr * 1.9
    document.bmrform.tdee.value = Math.round(tdee * 100) / 100.0;
}
