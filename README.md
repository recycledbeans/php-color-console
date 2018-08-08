# PHP Console Colors
Some helper functions to add some color to PHP console output.

There are a number of functions available. 

```
// Displays blue text
echo textblue('Hello World');

// Displays black text
echo textblack('Hello World');

// Displays red text
echo textred('Hello World');

// Displays green text
echo textgreen('Hello World');

// Send a custom color integer.
echo textcolor('Hello World', 36);

// Sets the background to be inverted of the current terminal background
echo bginverted('Hello World');

// Prints text as a new line
echo println('Hello World')

```

Functions can be used together with each other or in the middle of text:

```

echo println( textgreen('Success: ') . 'File has finished downloading.' );

```