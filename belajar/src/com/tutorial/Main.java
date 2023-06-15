package com.tutorial;

import java.util.Calendar;
import java.util.Collection;
import java.util.Scanner;
import java.io.*;
import java.math.*;
import java.security.*;
import java.text.*;
import java.util.*;
import java.util.concurrent.*;
import java.util.function.*;
import java.util.regex.*;
import java.util.stream.*;
import static java.util.stream.Collectors.joining;
import static java.util.stream.Collectors.toList;

public class Main {

    /*
     * Complete the 'miniMaxSum' function below.
     *
     * The function accepts INTEGER_ARRAY arr as parameter.
     */

    public static void miniMaxSum(List<Integer> arr) {
        // Write your code here
        long total = arr.get(0);
        long min = arr.get(0);
        long max = arr.get(0);

        for (int i = 1; i < arr.size() ; i++) {
            long val = arr.get(i);
            total = total + val;

            if (val < min) {
                min = val;
            }
            if (val > max) {
                max = val;
            }

        }

        long maxSum = total - min;
        long minSum = total - max;
        System.out.println(maxSum + " " + minSum);



    }

}

class Solution {
    public static void main(String[] args) throws IOException {
        BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(System.in));

        List<Integer> arr = Stream.of(bufferedReader.readLine().replaceAll("\\s+$", "").split(" "))
            .map(Integer::parseInt)
            .collect(toList());

        Main.miniMaxSum(arr);

        bufferedReader.close();
    }
}
