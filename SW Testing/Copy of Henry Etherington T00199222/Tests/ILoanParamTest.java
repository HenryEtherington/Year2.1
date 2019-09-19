import org.junit.Test;
import org.junit.runner.RunWith;
import org.junit.runners.Parameterized;
import org.junit.runners.model.FrameworkField;
import org.junit.runners.model.FrameworkMember;

import java.util.Arrays;
import java.util.Collection;

import static junit.framework.TestCase.assertEquals;

@RunWith(value = Parameterized.class)

public class ILoanParamTest {

    private double expected;
    private int period;
    private double loanAmount;

    public ILoanParamTest(double expected, int period, double loanAmount) {
        this.expected = expected;
        this.period = period;
        this.loanAmount = loanAmount;
    }

    @Parameterized.Parameters (name= "{index}: checkCost({1})={0}")
    public static Collection<Object[]> getTestParameters() {
        return Arrays.asList(new Object[][] {
             //Negative tests.
                 //Note that period in years is tested  before loan amount in  all of the test cases.
                   {0.0,3,499},
                //Valid time period and invalid loan amount.
                //Note that and invalid year then an invalid loan amount cannot be tested as it crashes the program.
                //{0.0,0,7500},
                // Causes unexpected exception: invalid time period and valid loan amount.
                   {0.0,4,10001}, //Valid time period and invalid loan amount.
                //Cannot be tested.
                //{0.0,'bbb', 'aaa'}, //Invalid variable type entered into both loan amount and period.
                //{0.0, ,},
                   {0.0,0,0}, //Invalid loan and period.
        });
    }

    @Test(expected = IllegalArgumentException.class )
    public void testCheckMonthlyPaymentAll() {
        Loan loan = new Loan(loanAmount,period);
        assertEquals(expected, loan.getMonthlyPayment(),1.11);
    }
}