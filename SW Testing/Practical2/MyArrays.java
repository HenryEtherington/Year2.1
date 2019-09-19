public class MyArrays {
    public static int insert(int[] values, int currentSize, int newElement, int pos) {
        if (currentSize < values.length) {
            for (int i = currentSize - 1; i >= pos; i--) {
                values[i + 1] = values[i];
            }
            values[pos] = newElement;
            currentSize++;
        }
        return currentSize;
    }

    public static int linearSearch(int[] a, int searchKey) {
        for (int i = 0; i < a.length; i++) {
            if (searchKey == a[i]) {
                return i;
            }
        }
        return -1;
    }

    public static void selectionSort(int[] a) {
        //sorting in ascending order
        for (int i = 0; i <= a.length - 2; i++) {
            //find index such that a[index] is the smallest of a[i]…a[a.length-1]
            int index = i;
            int smallest = a[i];

            for (int j = i + 1; j <= a.length - 1; j++) {
                if (a[j] < smallest) {
                    smallest = a[j];
                    index = j;
                }
            }
            //if index != i, swap a[index] and a[i].
            if (index != i) {
                int temp = a[i];
                a[i] = a[index];
                a[index] = temp;

            }
        }
    }

    public static void mergeSort(int[] a) {
        if (a.length <= 1) {
            return;
        }
        int[] first = new int[a.length / 2];
        int[] second = new int[a.length - first.length];
        // Copy the first half of a into first, the second half into second
        for (int i = 0; i < first.length; i++) {
            first[i] = a[i];
        }
        for (int i = 0; i < second.length; i++) {
            second[i] = a[first.length + i];
        }

        mergeSort(first);
        mergeSort(second);
        merge(first, second, a);
    }

    private static void merge(int[] first, int[] second, int[] a) {
        int iFirst = 0; // Next element to consider in the first array
        int iSecond = 0; // Next element to consider in the second array
        int j = 0; // Next open position in a

        // As long as neither iFirst nor iSecond is past the end, move
        // the smaller element into a
        while (iFirst < first.length && iSecond < second.length) {
            if (first[iFirst] < second[iSecond]) {
                a[j] = first[iFirst];
                iFirst++;
            } else {
                a[j] = second[iSecond];
                iSecond++;
            }
            j++;
        }

        // Note that only one of the two loops below copies entries
        // Copy any remaining entries of the first array
        while (iFirst < first.length) {
            a[j] = first[iFirst];
            iFirst++;
            j++;
        }
        // Copy any remaining entries of the second half
        while (iSecond < second.length) {
            a[j] = second[iSecond];
            iSecond++;
            j++;
        }
    }

    public static void insertionSort(int[] a) {
        //sorts in ascending order
        int val;
        for (int i = 1; i <= a.length - 1; i++) {
            val = a[i];
            int j = i - 1;
            while (j >= 0 && a[j] > val) {
                a[j + 1] = a[j];
                j--;
            }
            a[j + 1] = val;
        }
    }
}
