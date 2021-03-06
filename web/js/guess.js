// Global variables
const MAX_TRIES = 3;
const MIN = 1;
const MAX = 10;
var numTries = 1;
var dict = {
    1: 'first',
    2: 'second',
    3: 'third'
};

/**
 * Display the UI form asking the user to guess the random number.
 * 
 * @param int id            ID used to differentiate the text boxes and buttons.
 * @param int randNumber    Random number picked by the PHP code.
 */
function displayUI(id, randNumber)
{
    document.write("I'm thinking of a number from 1 to 10.<br>");
    document.write("You must guess what it is in " + MAX_TRIES + " tries.<br>");
    document.write("Enter a guess: ");
    var textInput = "<input type='text' id='guess" + id + "' size=10 maxlength=2 /> ";
    document.write(textInput);
    var submitButton = "<input type='submit' id='submit" + id + "' value='Guess' /><br>";
    document.write(submitButton);
    $("#submit" + id).click(function() {
        compareValues(numTries, randNumber);
    });
}

/**
 * Calculate the difference between the random number and the input value and
 * return the appropriate message.
 * 
 * @param int randNumber    Random number picked by the PHP code.
 * @param int inputVal      Number guessed by the user.
 * @return String Diff message.
 */
function getDiffMessage(randNumber, inputVal)
{
    var diff = Math.abs(randNumber - inputVal);

    if (diff >= 3) {
        return '(cold)';
    } else if (diff == 2) {
        return '(warm)';
    } else if (diff == 1) {
        return '(hot)';
    } else {
        return '(invalid number)';
    }
}

/**
 * Compare the guessed value with the picked random number.
 * 
 * @param int id            ID used to differentiate the text box and buttons.
 * @param int randNumber    Random number picked by the PHP code.
 */
function compareValues(id, randNumber)
{
    // Validate input value
    var inputVal = $("#guess" + id).val().trim();
    if (inputVal == '') {
        alert('Error: You did not enter any input.');
        return;
    } else if (isNaN(inputVal) || inputVal < MIN || inputVal > MAX) {
        alert('Error: Input value is not within expected range');
        return;
    }

    // Indicate whether the user entered the correct value or not
    document.write("<span>Your " + dict[numTries] + " guess is: " + inputVal + " ");
    if (inputVal != randNumber) {
        document.write(getDiffMessage(randNumber, inputVal) + "<br><br>");
        ++numTries;
        if (numTries <= MAX_TRIES) {
            displayUI(numTries, randNumber);
        } else {
            document.write("Game over. You've reached the max number of tries.<br>");
        }
    } else {
        document.write("<br>Right! You have won the game!");
    }
}

/**
 * On document ready state, fetch the random number from the PHP code and
 * display the UI.
 */
$(document).ready(function() {
    // Get the random number from the PHP code using AJAX
    $.ajax({
        type : "GET",
        url : "/pick",
        async : true,
        data : {
            min : MIN,
            max : MAX
        },
        dataType : "text",
        success : function(response) {
            displayUI(numTries, response);
        },
        error : function(xhr) {
            document.write("Error: AJAX request failed.<br>");
        }
    });
});
