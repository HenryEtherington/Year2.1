public class MyArrays {


    int[]values = {1, 2, 3, 4, 5};

    public static int sum (int [] values)//CC use recursion not loop
    {
        int sum = 0;

for(int i= 0; i < values.length-1; i++) {


        sum = values[i] + sum;

    }

        return sum;
    }


    public static int[] copyOf (int[] original, int newLength)
    {

        int [] copy = {0,0,0,0,0};
        //int[]values = {1, 2, 3, 4, 5};

        newLength = copy.length;

        for(int i=0; i < newLength;i++) {

        //Valid number
            if(copy[i] >0)
        {
             copy[i] = 0;
        }

        }
        return original;
    }
}
