import org.junit.Test;
import org.junit.runner.RunWith;
import org.junit.runners.Parameterized;

import java.util.Arrays;
import java.util.Collection;

import static junit.framework.TestCase.assertEquals;

@RunWith(value = Parameterized.class)

public class LoanParamTest {

    private double expected;
    private int period;
    private double loanAmount;

    public LoanParamTest(double expected, int period, double loanAmount) {
        this.expected = expected;
        this.period = period;
        this.loanAmount = loanAmount;
    }

    @Parameterized.Parameters (name= "{index}: checkCost({1})={0}")
    public static Collection<Object[]> getTestParameters() {
        return Arrays.asList(new Object[][] {
               //Positive tests.
                {9.67,5,500},  //6% interest boundary test.
                {869.88,1,10000}, //8% interest boundary test.
                {96.80,3,3000}, //10% interest.
                {94.38,5,5001}, //5% interest boundary test.
        });
    }

    @Test
    public void testCheckMonthlyPaymentAll() {
        Loan loan = new Loan(loanAmount,period);
        assertEquals(expected, loan.getMonthlyPayment(),1.1);
    }
}