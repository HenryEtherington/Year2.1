import junit.framework.TestCase;
import org.junit.Assert;
import org.junit.Rule;
import org.junit.Test;
import org.junit.rules.Timeout;

import java.lang.reflect.Field;
import java.lang.reflect.Method;

import static junit.framework.TestCase.assertEquals;

public class CustomerTest {

    @Rule
    public Timeout globalTimeout = Timeout.millis(2000);

    Customer customer = new Customer("Jimmy", 1350);

    @Test
    public void TestConstructor() {
        new Customer();
    }

    @Test
    public void TestGetName() {
        assertEquals("Name", customer.getName(), "Jimmy");
    }

    @Test
    public void TestGetPayment() {
        assertEquals(1350, customer.getMonthlyPayments(), 1.11);
    }

    @Test
    public void TestToString() {
        assertEquals("Name: Jimmy Payments: 1350.0",customer.toString());
    }
}