<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <p>
        <?php
            // Outputting strings
            echo 'Hello World!'; // Output: Hello World!
            echo 'Hello World!'; // Output: Hello World!
            echo '<br>';
            print 'Hello World!'; // Output: Hello World!
            echo '<br>';
            echo print 'Hello World!'; // Output: Hello World! (1)
            echo '<br>';
            echo 'joe\'s pizza'; // Output: joe's pizza
            echo '<br>';
            echo "joe's pizza"; // Output: joe's pizza
            echo '<br>';
            echo "joe\"s pizza"; // Output: joe"s pizza
            echo '<br>';
            
            // Variables and string concatenation
            $name = 'Joe';
            echo $name; // Output: Joe
            echo '<br>';
            echo 'Hello, ' . $name . '!'; // Output: Hello, Joe!
            echo '<br>';
            echo "Hello $name"; // Output: Hello Joe
            echo '<br>';
            echo "Hello {$name}"; // Output: Hello Joe
            echo '<br>';
            echo 'Hello {$name}'; // Output: Hello {$name}
            echo '<br>';
            
            // References
            $x = 1;
            $y = $x;
            echo $y; // Output: 1
            echo '<br>';
            $z = &$x;
            $x = 4;
            echo $z; // Output: 4
            echo '<br>';
            print 'Hello World!'; // Output: Hello World!
            echo '<br>';
            echo print 'Hello World!'; // Output: Hello World! (1)
            echo '<br>';
            echo 'joe\'s pizza'; // Output: joe's pizza
            echo '<br>';
            echo "joe's pizza"; // Output: joe's pizza
            echo '<br>';
            echo "joe\"s pizza"; // Output: joe"s pizza
            echo '<br>';

            $name = 'Joe';
            echo $name; // Output: Joe
            echo '<br>';
            echo 'Hello, ' . $name . '!'; // Output: Hello, Joe!
            echo '<br>';
            echo "Hello $name"; // Output: Hello Joe
            echo '<br>';
            echo "Hello {$name}"; // Output: Hello Joe
            echo '<br>';
            echo 'Hello {$name}'; // Output: Hello {$name}
            echo '<br>';
         ?>
    </p>
</body>
</html>
