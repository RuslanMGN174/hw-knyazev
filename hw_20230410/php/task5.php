<?php
/*
 * Для группы учащихся известны годовые оценки по следующим предметам:
 *  математика, физика, химия, информатика.
 * Найти среднюю в группе оценку по каждому из предметов.
 * Суммирование оценок по каждому предмету.
 */

function arrayGrades(): array
{
    return [
        "ivanov" => [
            "математика" => 4,
            "физика" => 5,
            "химия" => 3,
            "информатика" => 5
        ],
        "petrov" => [
            "математика" => 5,
            "физика" => 3,
            "химия" => 3,
            "информатика" => 4
        ],
        "sidorov" => [
            "математика" => 2,
            "физика" => 3,
            "химия" => 4,
            "информатика" => 5
        ],
        "gavrilov" => [
            "математика" => 5,
            "физика" => 5,
            "химия" => 5,
            "информатика" => 5
        ]
    ];
}

function arraySumAndAVG(): array
{
    $mathCount = 0;
    $phisCount = 0;
    $chemCount = 0;
    $infoCount = 0;
    $arrMarkTotal = [];

    foreach (arrayGrades() as $key => $value) {
        foreach ($value as $subject => $mark) {
            switch ($subject) {
                case "математика":
                    $arrMarkTotal[$subject] = ["Сумма оценок" => $mathCount += $mark];
                    break;
                case  "физика":
                    $arrMarkTotal[$subject] = ["Сумма оценок" => $phisCount += $mark];
                    break;
                case "химия":
                    $arrMarkTotal[$subject] = ["Сумма оценок" => $chemCount += $mark];
                    break;
                case  "информатика":
                    $arrMarkTotal[$subject] = ["Сумма оценок" => $infoCount += $mark];
                    break;
            }
        }
    }

    foreach ($arrMarkTotal as $subject => $subjectMarksArr) {
        foreach ($subjectMarksArr as $key => $value) {
            $temp = $value / sizeof(arrayGrades());
            $arrMarkTotal[$subject] += ["Средняя оценка" => $temp];
        }
    }

    return $arrMarkTotal;
}