<!DOCTYPE html>
<?php
if isset($_POST['q1']) AND isset($_POST['q2']) AND isset($_POST['q3']) {
	if $_POST['q1'] == 1 {
		if $_POST['q2'] == 1 {
			if $_POST['q3'] == 1 {
				header('Location: final.php');
			}
		}
	}
}
?>
<HTML>
    <HEAD>
        <TITLE>BSZGeo-Hunt</TITLE>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/start_style.css" media="screen" />       
		<meta name="author" content="© BG161">
		<meta charset='UTF-8'>
    </HEAD>
	
	<BODY class="body">

    <center>
        <FORM name="stein" action='pausenraum.php' method='post'>
        <h1 class="h1">Station Pausenraum</h1>
        <hr class="hr">
        <div class="content">
            
            <br>
			<?php else {
				print 'Fragen falsch beantwortet!';
			}?>
			<p>Löse alle 3 Rätsel richtig und du wirst einen Hinweis erhalten. Ist nur eine einzige Antwort falsch, beginnt alles von vorn!</p>
            <hr style="max-width: 95%" class="hr">
			<h2 class="h2"> Frage 1: </h2>  
            <p name="Question1">...Frage...</p>
			<div name="Solutions1">
				<input type="radio" id="1" name="a1">
				<label for="1">Kraken</label><br/>
				<input type="radio" id="2" name="a1">
				<label for="2">Kraken</label><br/>
				<input type="radio" id="3" name="a1">
				<label for="3">Kraken</label><br/>
				<input type="radio" id="4" name="a1">
				<label for="4">Kraken</label><br/>
			</div>
			
			<h2 class="h2"> Frage 2: </h2>  
            <p name="Question2">...Frage...</p>
			<div name="Solutions2"></div>
			
			<h2 class="h2"> Frage 3: </h2>  
            <p name="Question3">...Frage...</p>
			<div name="Solutions3"></div>
			
            <input class="buttonSend" type="submit", name="btSubmit", value="L&ouml;sungen absenden >>" >  
			
			<br>
			<br>
			
		</div>
		</FORM>
    </center>
	
	</BODY>
</HTML>