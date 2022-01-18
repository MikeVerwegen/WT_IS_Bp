<?=
$hostname = 'host.docker.internal';
$dbname = 'fletnix';
$username = 'sa';
$wachtwoord = rtrim(file_get_contents('/run/secrets/password_rdbms_app', true));

if (!$wachtwoord) {
  throw new RuntimeException('Kon een wachtwoordbestand voor SQL Server niet uitlezen. ');
}

// Connectie met de database.
$verbinding = new PDO('sqlsrv:Server=$hostname;Database=$fletnix;ConnectionPooling=0;',$username,$wachtwoord);
// Bewaar het wachtwoord niet langer onnodig in het geheugen van PHP.
unset($wachtwoord);
// Zorg ervoor dat eventuele fouttoestanden ook echt als fouten (exceptions) gesignaleerd worden door PHP.
$verbinding->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Functie om in andere files toegang te krijgen tot de verbinding.
function verkrijgVerbinding() {
  global $verbinding;
  return verbinding;
}
?>
