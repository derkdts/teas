<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица 10х31</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Таблица 10х31</h2>

<table>
    <?php
    // Выводим заголовки столбцов
    echo "<tr>";
    for ($i = 1; $i <= 31; $i++) {
        echo "<th>Столбец $i</th>";
    }
    echo "</tr>";

    // Выводим строки таблицы
    for ($row = 1; $row <= 10; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 31; $col++) {
            echo "<td>$row,$col</td>"; // Выводим координаты ячейки для примера
        }
        echo "</tr>";
    }
    
?>
</table>

</body>
</html>
