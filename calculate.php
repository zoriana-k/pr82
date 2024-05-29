<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результати обчислень</title>
</head>
<body>
    <h2>Результати обчислень</h2>
    <?php
    // Отримання змінних з методу GET
    $a = $_GET['a'] ?? 0; // за замовчуванням 0, якщо параметр не заданий
    $b = $_GET['b'] ?? 0; // за замовчуванням 0, якщо параметр не заданий

    // Перевірка на введення чисел
    if (!is_numeric($a) || !is_numeric($b)) {
        echo "Будь ласка, введіть числа.";
    } else {
        // Обчислення результатів
        $sum = $a + $b;
        $product = $a * $b;
        $difference = $a - $b;
        $quotient = $b != 0 ? $a / $b : "Ділення на нуль";

        // Виведення результатів
        echo "<p>Сума чисел a і b: $sum</p>";
        echo "<p>Добуток чисел a і b: $product</p>";
        echo "<p>Різниця чисел a і b: $difference</p>";
        echo "<p>Частка чисел a і b: $quotient</p>";
    }
    ?>
</body>
</html>
