function calculateFactorial($number) {
    if ($number < 0) {
        return null;
    }
    if ($number === 0) {
        return 1;
    }
    return $number * calculateFactorial($number - 1);
}
echo calculateFactorial(4); 


        //The factorial of 4 is 24, calculateFactorial(4)
