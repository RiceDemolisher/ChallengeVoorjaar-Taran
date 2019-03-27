<html>
<body>
<form method='post'>
    <select name='subject[]' multiple size=5>
        <option value='mercedes'>Mercedes</option>
        <option value='ferrari'>Ferrari</option>
        <option value='audi'>Audi</option>
        <option value='ford'>Ford</option>
        <option value='opel'>Opel</option>
    </select>
    <input type='submit' name='submit' value=Submit>
</form>
</body>
</html>
<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["subject"])) {
        foreach ($_POST['subject'] as $subject)
            echo '<img src="img/' . $subject . '.jpg">';
    } else
        echo "Select an option first !!";
}
?>