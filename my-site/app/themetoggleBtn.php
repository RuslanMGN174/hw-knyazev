<?php
$themeClass = '';
if (isset($_GET['theme']) && $_GET['theme'] == 'dark') {
    $themeClass = 'dark-theme';
}

$themeToggle = ($themeClass == 'dark-theme') ? 'light' : 'dark';
?>

<!DOCTYPE html>
<html lang="ru">
<!-- прочий код -->
<body class="<?php echo $themeClass; ?>">
<a href="?theme=<?php echo $themeToggle; ?>">Вкл/Выкл темный режим</a>
<!-- прочий код -->
</body>
</html>