<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
        <body>

            <form method="post" action="page4a.php" >
            <label>Matricule</label>
            <input type="text" matricule="Matricule"><br><br>

            <label>Nom</label>
            <input type="text" name="Nom  "><br><br>

            <label>Prenom</label>
            <input type="text" name="Prenom"><br><br>

            <label>Sexe:</label>
            <input type="radio" genre="Personne" value="Masculin">Masculin
            <input type="radio" genre="Personne" value="Feminin">Feminin<br>
            
            <br><label>Adresse</label><br>
            <textarea row="5" cols="25"></textarea><br><br>

            <label>Service:</label>
            <select name="service">
                <option value="Choisir"> Choisir</option>
                <option value="Service1">Service1</option>
                <option value="Service2">Service2</option>
                <option value="Service3">Service3</option>
            </select><br><br>

            <label>Fonctions:</label>
            <select name="fonction">
                <option value="Choisir"> Choisir</option>
                <option value="Fonction1">Fonction1</option>
                <option value="Fonction2">Fonction2</option>
                <option value="Fonction3">Fonction3</option>
            </select><br><br>

            <input type="submit">
            <input type="reset">
            </form>

            
            
            

        </body>
</html>