# PHP Foreach Loop Modification During Iteration

This repository demonstrates a common issue in PHP when using foreach loops to modify arrays during iteration.  The issue stems from modifying the array's structure while the loop is iterating through it, causing unexpected results. 

The `bug.php` file shows the problem, while `bugSolution.php` presents a corrected solution. 

## Problem

The original code attempts to remove a specific element ('target') from an array. Due to the modification of the array within the foreach loop, the loop's internal pointer doesn't update correctly, leading to skipping elements.

## Solution

The solution uses a separate array to store the elements to be kept. This avoids modifying the array during iteration, preventing the unexpected behavior. 