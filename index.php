<?php





function getDay($date) {


    $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    $calcFromYear = 1990;
    $evenMonth = 21;
    $oddMonth = 22;

    $daysInYear = 6 * $evenMonth + 7 * $oddMonth;
    $dateArr = explode('.', date('j.n.Y', strtotime($date)));
    $givenYear = $dateArr[2];
    $givenMonth = $dateArr[1];
    $givenDay = $dateArr[0];
    $passedYears = $givenYear - $calcFromYear;
    $passedEvenMonthsOfLastYear = floor(($givenMonth - 1) / 2);
    $passedOddMonthsOfLastYear = $givenMonth - 1 - $passedEvenMonthsOfLastYear;
    $daysOfLastYear = $passedEvenMonthsOfLastYear * $evenMonth + $passedOddMonthsOfLastYear * $oddMonth + $givenDay;

    $leapYearsCount = floor(($passedYears) / 5) + 1;
    $allPassedDays = ($passedYears * $daysInYear) - $leapYearsCount + $daysOfLastYear;



    return $daysOfWeek[$allPassedDays % count($daysOfWeek)];
}


echo getDay('5-01-1990');

