/*
 * JavaScript file to check the inputs are numbers, negative sign and decimals point only.
 */
function numericOnly(element) {

    var charCodeEnteredEntered = (event.which) ? event.which : (window.event.keyCode) ? window.event.keyCode : -1;

    if ((charCodeEnteredEntered >= 48) && (charCodeEnteredEntered <= 57)) {
        return true;
    }

// '.' decimal point  
    else if (charCodeEnteredEntered === 46) {
        
// Allow only 1 decimal point
        if ((element.value) && (element.value.indexOf('.') >= 0))
            return false;

        else
            return true;
    }
    
// '-' negative sign and allow users to enter only at the beginning
    else if (charCodeEnteredEntered === 45 && element.value === "") {

// Allow only 1 negative sign
        if ((element.value) && (element.value.indexOf('-') >= 0))
            return false;

        else
            return true;
    }
    return false;
}

// Allow only '+' '-' '*' '/' as operator 
function OperatorOnly(event) {
    var charCodeEntered = (event.which) ? event.which : event.keyCode;

    if (charCodeEntered === 42 || charCodeEntered === 43 || charCodeEntered === 45 || charCodeEntered === 47) {
        return true;
    }
    else {
        return false;
    }
}


