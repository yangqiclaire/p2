<!doctype html>
<html>
    <head>
       	<meta charset='utf-8'>
       	<link type='text/css' rel="stylesheet" href="p2.css">
       	<title>xkcd password generator</title>
       	<?php require'logic.php'; ?>
    </head>
    <body>  
        <header>
            <h1>xkcd Passward Generator</h1>
        </header>

        <div id="tableContainer">
            <div id="tableRow">
              <section id="about">
                  <h2>What are xkcd passwords?</h2>
                  <p>Xkcd passwords are inspired from <a href='http://xkcd.com/936/'>xkcd password comic</a>. Xkcd passwords are secure but memorable passwords.</p>
                  <h2>Why should I use xkcd passwords?</h2>
                  <p>Xkcd passwords are easy to remember but difficult to guess.</p>
                  <h2>How can I get a xkcd password?</h2>
                  <p>Please type in the number of words that you want to generate and submit. 
                  You can also add a symbol or number to increase the complexity of your xkcd password.</p>
              </section>

              <section id='generator'>
                    <h2>My password is:</h2>
                 <div id='password'>
                    <?php foreach ($password as $key => $value) {echo $value.' ';}?>
                 </div>
                 <form action="index.php" method="GET">
                    <label>Number of Words</label>
                    <input type="number" name="count" value=<?=$count?> min=1 max=6 id='countbox'>(max=6)</br>
                    <label>Add a number</label>
                    <input type="checkbox" name="number" <?=$number?> ></br>
                    <label>Add a symbol</label>
                    <input type="checkbox" name='symbol' <?=$symbol?> ></br>
                    <input type="submit" name="submit" value="Get My Password!">
                 </form>
              </section>

            </div>  
         </div>      	
   
     </body>
</html>