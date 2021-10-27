<!DOCTYPE html>
<html>

<head>
    <title>Rock Paper Scissors</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Rock Paper Scissors Lizard Spock</h1>
    <h2>Rules:</h2>
    <div id="rules">
        <p>Make a choice between rock, paper, scissors, lizard, or spock</p>
        <p>Keeping in mind the following:</p>
        <ul class="list">
            <li>Scissors cuts Paper</li>
            <li>Paper covers Rock</li>
            <li>Rock crushes Lizard</li>
            <li>Lizard poisons Spock</li>
            <li>Spock smashes Scissors</li>
            <li>Scissors decapitates Lizard</li>
            <li>Lizard eats Paper</li>
            <li>Paper disproves Spock</li>
            <li>Spock vaporizes Rock</li>
            <li>Rock crushes Scissors</li>
        </ul>
    </div>
    <h2>Instructions:</h2>
    <p>Submit your throw below to see if you beat the computer</p>
    <form method='POST' action='process.php'>
        <div>
            <label for='throw'>Your throw</label>
            <input type='text' id='throw' name='throw'>
        </div>
        <button type='submit'>Throw</button>
    </form>
    <?php if (isset($results)) { ?>
    <h1>Results</h1>
    <?php if (in_array($throw, $throwOptions)) { ?>
    You threw <?php echo $throw ?></br>
    The computer threw <?php echo $computer?></br>
    <?php echo $outcome ?>
    <?php } else { ?>
    That was not a valid throw!
    <?php } ?>
    <?php } ?>

</body>

</html>