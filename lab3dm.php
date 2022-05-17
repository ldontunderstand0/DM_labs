<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №3</title>
    
    <script type="text/javascript" src="/scripts/lab3dm.js"></script>
</head>
<body bgcolor="white">

<h1>Лабораторная работа №3</h1>
<form>
    <table>
        <tr>
            <td>Первое множество</td>
            <td> <input type="text" id="arr1" value="" size="50"/></td>
        </tr>
        <tr>
            <td>Второе множество</td>
            <td> <input type="text" id="arr2" value="" size="50"/></td>
        </tr>
        <tr>
            <td>Пары элементов</td>
            <td> <input type="text" id="couples" value="" size="50"/></td>
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