public class Ratings {

    private final int REVIEWERS = 10;
    private final int MOVIES = 5;

    private int[][] grid;

    public Ratings() {

        grid = new int[REVIEWERS][MOVIES];
    }

    public void set(int reviewer, int movie, int rating) {

        grid[reviewer][movie] = rating;
    }

    public int get(int reviewer, int movie) {


        for (int i = 0; i < MOVIES; i++) {


            for (int j = 0; j < REVIEWERS; j++) {

                movie = grid[i][j];

            }
        }

        return movie;
    }

    public void display() {

        for (int i = 0; i < MOVIES; i++) {//CC should be REVIEWERS


            for (int j = 0; j < REVIEWERS; j++) {

                System.out.println("Grid" + grid[i][j]);

            }
        }

        public int countAbove ( int value){

            int numRating = 0;

            for (int i = 0; i < grid.length; i++) {
                numRating++;
            }

            return numRating;
        }
    }
}
