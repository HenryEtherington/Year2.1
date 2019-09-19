import junit.framework.TestCase;
import org.junit.Rule;
import org.junit.Test;
import org.junit.rules.Timeout;

import static junit.framework.TestCase.assertEquals;

public class LoanTest {

    @Rule
    public Timeout globalTimeout = Timeout.millis(2000);

    Loan loan = new Loan(5000, 1);

@Test
public void TestConstructor() {
    new Loan();
    }

    @Test
    public void TestGetAmount() {
        assertEquals(5000, loan.getAmount(), 1.11);
    }

    @Test
    public void TestGetPeriod() {
        assertEquals(1, loan.getPeriod(), 1.11);
    }

    @Test
    public void TestGetRate() {
        assertEquals(10, loan.getRate(), 1.11);
    }

    @Test
    public void TestGetMonthlyPayment() {
        assertEquals(439.57, loan.getMonthlyPayment(), 1.11);
    }

    @Test
    public void TestGetTotalPayment() {
        assertEquals(5274.95, loan.getTotalPayment(), 1.11);
    }


}
