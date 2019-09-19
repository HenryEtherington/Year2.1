import org.easymock.EasyMock;
import org.junit.Assert;
import org.junit.Test;
import org.junit.runner.RunWith;
import org.powermock.api.easymock.PowerMock;
import org.powermock.core.classloader.annotations.PrepareForTest;
import org.powermock.modules.junit4.PowerMockRunner;

import static junit.framework.TestCase.assertEquals;
import static org.easymock.EasyMock.createMock;
import static org.easymock.EasyMock.expect;
import static org.powermock.api.easymock.PowerMock.replay;
import static org.powermock.api.easymock.PowerMock.verify;


public class MockTest {

    @Test
public void testTakeoutLoan() throws Exception {

        Customer customer = new Customer("Jimmy", 1020.00);

        /*call the createMock to create a mock for the Loan class */
        Loan mockLoan = EasyMock.createMock(Loan.class);

        /* Tell PowerMock to intercept any new call and return mockOwner */
        PowerMock.expectNew(Loan.class, 5000.0,5).andReturn(mockLoan);

        /* set up the expected values and return values */
        expect(mockLoan.getMonthlyPayment()).andReturn(1020.00);

        /*activate the mock */
        replay(mockLoan, Loan.class);

        double expResult = 1020;
        customer.takeoutloan();
        double result = mockLoan.getMonthlyPayment();
        assertEquals(expResult, result, 1.11);
        /* verify that PowerMock was called and used */
        verify(mockLoan,Loan.class);
        }
}