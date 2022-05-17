<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №2</title>
    
    <script type="text/javascript" src="/scripts/lab2dm.js"></script>
</head>
<body bgcolor="white">

<h1>Лабораторная работа №2</h1>
<form>
    <table>
        <tr>
            <td>Введите бинарную матрицу n*n</td>
            <td> <textarea id="arr" value="" rows = "10" cols = "20" size=""></textarea></td>
        </tr>
        <tr>
            <td colspan="2"> <input type="button" value="Расчитать"  onclick="main();"/></td>
        </tr>
    </table>
</form>
<div id ="matrix"></div>
<div id ="result"></div>
</body>
</html>