# Guess Number
This is a symfony project in which the back-end server picks a random number
between 1 and 10. The user is given 3 chances to guess that number. If the user
guesses the number correctly, the program prints a success message and exits.
If the user fails to guess the number in 3 attempts, the program prints a
message and exits.

### Requirements
This program has been developed on Ubuntu 16.04 using PHP 7, Symfony 3.3.6, and
Composer 1.0.0-beta2. Before installing this program, make sure you install the
appropriate versions of PHP, Symfony, and Composer.

### Installation
1. Download the code into the root web directory using the command-line using
`git clone https://github.com/pgngp/guess-number.git` or by downloading the zip
from [here](https://github.com/pgngp/guess-number/archive/master.zip) and unpacking it.
2. Change to the project directory and then run `composer install` to install PhpUnit
and other dependencies.
3. Run unit tests using `php vendor/bin/phpunit tests`.
4. Start the built-in PHP server by running `php bin/console server:start <IP_ADDRESS>:<PORT>`.
5. In a web browser, go to `<IP_ADDRESS>:<PORT>/guess` to access the game.

### Implementation Details
The UI is implemented using JavaScript and jQuery in `web/js/guess.js`. When
the UI loads, the JavaScript code requests a random number from the PHP
code using AJAX. The PHP code that receives this request is `web/pickNumber.php`.
This PHP script in turn calls the `pickNumber()` method in `src/NumberPicker.php`
class to fetch the random number between 1 and 10.

Once `guess.js` receives the random number, it presents the user with a form
to enter a guess. If the guess is correct, the UI displays a success message and
exits. If the guess is incorrect, the user is given 2 more chances to guess. If
the user fails guessing the correct number in 3 attempts, the UI displays
a message and exits.
