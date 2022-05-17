<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №1</title>
    
    <script type="text/javascript" src="/scripts/lab1dm.js"></script>
</head>
<body bgcolor="white">

<h1>Лабораторная работа №1</h1>
<form>
    <table>
        <tr>
            <td>Первый массив:</td>
            <td> <input type="text" id="arr1" value="" size="50"></td>
        </tr>
        <tr>
            <td>Второй массив:</td>
            <td> <input type="text" id="arr2" value="" size="50"></td>
        </tr>
        <tr>
            <td colspan="2"> <input type="button" value="Расчитать" onclick="main();"></td>
        </tr>
    </table>
</form>
<div id="union"></div>
<div id="cross"></div>
<div id="difference"></div>
<div id="addAtoB"></div>
<div id="addBtoA"></div>
</body>
</html>