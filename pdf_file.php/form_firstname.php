<form action="pdf_test.php" method="post">
    <div>
        <label for="fname"> enter your first name</label>
        <input type="text" name="fname" id="fname" minlength = 2 maxlength = 16 pattern = "[a-zA-Z]{2,16}" title = "Input a value with letters e.g A-Z which is longer then 2 digits but less then 16" placeholder = "Joe" required>
    </div>

    <div>
        <label for="lname">enter your last name</label>
        <input type="text" name="lname" id="lname" minlength = 2 maxlength = 16 pattern = "[a-zA-Z]{2,16}" title = "Input a value with letters e.g A-Z which is longer then 2 digits but less then 16" placeholder = "Bloggs" required>
    </div>

    <div>
        <label for="email">enter your email address</label>
        <input type="email" name="email" id="email" minlength = 2 maxlength = 25 pattern = "[a-zA-z0-9.]{6,25}@[a-zA-z0-9]{1,10}.[comorgco.uk]{3,6}" title = "Input an email with a @ and adddress e.g .com" placeholder = "Example@email.com" required>
    </div>

    <input type="submit" value="submit">
</form>