<?php 

    // Exo 1
    if(isset($_POST["age"]))
    {
        if($_POST["age"] >= 18)
        {
            $age = $_POST["age"];
            echo '<script>alert("Vous êtes autorisé à accéder au contenu privé, vous avez '.$age.' ans."); window.location.href="accueil.html"</script>';
        }
        else
        {
            $age = $_POST["age"];
            echo '<script>alert("Vous n\'êtes pas autorisé à accéder au contenu privé, vous n\'avez que '.$age.' ans."); window.location.href="index.html"</script>';
        }
    }

    // Exo 2
    if(isset($_POST["dateNaissance"]))
    {
        $dateDuJour = date('Y-m-d');
        $dateNaissance = $_POST["dateNaissance"];
        $diff = $dateDuJour - $dateNaissance;

        if($diff >= 18)
        {
            $age = $diff;
            echo '<script>alert("Vous êtes autorisé à accéder au contenu privé, vous avez '.$age.' ans."); window.location.href="accueil.html"</script>';
        }
        else
        {
            $age = $diff;
            echo '<script>alert("Vous n\'êtes pas autorisé à accéder au contenu privé, vous n\'avez que '.$age.' ans."); window.location.href="index.html"</script>';
        }
    }

?>