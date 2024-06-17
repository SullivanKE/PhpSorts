<?php
    require_once 'heapSort.php';
    require_once 'quickSort.php';


    if ($_SERVER["REQUEST_METHOD"] = "POST") {
        $userInput = htmlspecialchars($_POST['expression']); // Sanitize incoming user input
        $trimmedInput = preg_replace('/[a-zA-Z]+|\s+/', '', $userInput); // Removes all letters and spaces from the user input;
        $userArray = explode(',', $trimmedInput); // Separate it into an array


        $sortType = htmlspecialchars($_POST['sorttype']); // Sanitize radio button values
        
        switch($sortType) { // User chosen sort type
            case "Heap Sort":
                heapSort($userArray);
                break;
            case "Quick Sort":
                quickSort($userArray);
                break;
        }


        $userOutput = implode(', ', $userArray); // Put it back together into a string
        header('Location: index.php?submitted=' . $userOutput . 
                                    '&input=' . $userInput .
                                    '&sortType=' . $sortType); // Send us back to index
    }