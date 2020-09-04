<?php
include 'data.php'
?>

<form action="/action_page.php">
<label for="fname">Vardas:</label><br>
<input type="text" id="fname" name="fname"placeholder="Jonas"><br>
<label for="lname">el. pastas:</label><br>
<input type="text" id="lname" name="lname" placeholder="kazkas@one.lt"><br><br>
<label for="klase">Klase</label>
        <select name="klase" id="klase" require>
            <?php for($i=0; $i<count($klases); $i++):?>
            <option value=<?=$i?>><?=$klases[$i]; ?></option>
            <?php endfor ?>
        </select><br><br>
<textarea name="message" style="width:150px; height:100px;" placeholder="Parasyk kazka cia...."></textarea><br>
<input type="submit" value="Siusti">
</form>