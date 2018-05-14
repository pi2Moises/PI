<?
session_start('professor');
// $nome = $_session['nome'];
// $cpf = $_session['cpf'];
$_POST['NOME'];
echo $nome;
if(isset($_SESSION['nome_prof'])){ 
$tamanho = $_SESSION['nome_prof']; 
echo $tamanho;; 
} 
else{ 
echo "ERROR"; 
} 

?>
<?
session_destroy();
echo 'sessão inexistente';
?>