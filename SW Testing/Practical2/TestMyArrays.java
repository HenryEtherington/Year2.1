import java.util.Arrays;
import java.util.Random;

public class TestMyArrays {
    public static void main(String[] args) {
        
      /*  int [] values = new int[5];
        values[0] = 1;
        values[1] = 4;
        values[2] = 15;
        values[3] = 23;
        values[4] = 55; */
        int currentSize= 8;

       /* Random random = new Random();
        final int SIZE = 10;
        int[] values = new int[SIZE];
        for (int i = 0; i < values.length; i++) {
            values[i] = random.nextInt(Integer.MAX_VALUE);
        } */

        Random random = new Random();
        final int SIZE = 10;
        int[] values = new int[10];
        for (int i = 0; i < values.length; i++) {
            values[i] = i;

        }


       /* int currentSize = 5;
        
        currentSize = MyArrays.insert(values, currentSize, 10, 2);
        //expected output 1,4,10,15,23,55 */

         MyArrays.selectionSort(values);
         //MyArrays.insertionSort(values);
         //MyArrays.mergeSort(values);
         //Arrays.sort(values);

        for(int i=0; i < currentSize; i++)
        System.out.println(values[i]);
       /*  for (int i=0; i < currentSize; i++)
            System.out.println(values[i]); */

        }


        public static int[] makeCopy(int[] array) {

        int[] newArray = new int[array.length];
        for(int i=0; i<array.length; i++)
        {
            newArray[i] = newArray[i];
        }
        return newArray;
        }
   }
