
<?php
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case 'Addition':
            return $this->a + $this->b;
            break;

            case 'substraction':
            return $this->a - $this->b;
            break;

            case 'multiplication':
            return $this->a * $this->b;
            break;

            case 'division':
            return $this->a / $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>
<!DOCTYPE html>
<html>
<head>
<title> calculater</title>    
</head>
<h1 align="center"> MY CALCULATER</h1>
<form method="post">
<table align="center" width="100" height="200">
    <tr>
        <td><strong><?php echo '<lable>'.$result. '</lable>'; ?><strong></td>
    </tr>
    <tr>
        <td>Enter Number one</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>Enter Number two</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td>Select Oprator</td>
        <td><select name="op">
            <option value="Addition">Addition</option>
            <option value="substraction">substraction</option>
            <option value="multiplication">multiplication</option>
            <option value="division">division</option>
        </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="RESULT"></td>
    </tr>

</table>
</form>
</body>
</html>