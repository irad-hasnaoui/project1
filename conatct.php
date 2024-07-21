if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $age = htmlspecialchars($_POST['age']);
    $level = htmlspecialchars($_POST['$level']);
    $date = htmlspecialchars($_POST['$date']);
    $adresse = htmlspecialchars($_POST['$adresse']);
    $adresse2 = htmlspecialchars($_POST['$adresse2']);
    $inputGroupFile01 = htmlspecialchars($_POST['$inputGroupFile01']);
    $exampleFormControlTextarea1 = htmlspecialchars($_POST['$exampleFormControlTextarea1']);
    $email = htmlspecialchars($_POST['email']);
   

    // Afficher les données soumises
    echo "<h2>Données soumises :</h2>";
    echo "firstName : " . $firstName . "<br>";
    echo "lastName : " . $lastName . "<br>";
    echo "age : " . $age . "<br>";
    echo "level : " . $level . "<br>";
    echo "date : " . $date . "<br>";
    echo "adresse : " . $adresse . "<br>";
    echo "adresse2 : " . $adresse2 . "<br>";
    echo "inputGroupFile01 : " . $inputGroupFile01 . "<br>";
    echo "exampleFormControlTextarea1 : " . $exampleFormControlTextarea1 . "<br>";
    echo "email : " . $email . "<br>";
   