import static org.junit.Assert.*;

import org.junit.Test;
import java.lang.reflect.Field;
import java.lang.reflect.Method;


public class LoanPrivateTest {

    /**
     * Accessing a private member
     * Test of setAmount member, of class loan.
     */

    int MONTHS = 12;

    @Test
    public void TestSetAmount() throws Exception {
        System.out.println("Test Amount:");
        Loan target = new Loan(2500, 2);
        Class secretClass = target.getClass();

        /*Retrieve the field age */
        Field f = secretClass.getDeclaredField("loanAmount");

        /* make sure the field is accessible. */
        f.setAccessible(true);

        /* get the value of the field */
        System.out.println("The value in f (loanAmount) is " + f.get(target));

        double result =  f.getDouble(target);
        assertEquals("The loan amount should be equal", 2500,  result,1.11);
    }

    /**
     * Accessing a private member
     * Test of setAmount method, of class loan.
     */

    @Test
    public void TestSetAmount1() throws Exception {
        System.out.println("Test Amount:");
        /* Set up a new loan */
        Loan target = new  Loan(5750, 3);

        /* get the setAge method details */
        Method method=  Loan.class.getDeclaredMethod("setAmount", double.class);

        /* make the method accessible */
        method.setAccessible(true);

        /* invoke the method setAge with the value 7 */
        method.invoke(target, 7);

        /*access the field age and check its value is set to 7*/
        Class secretClass = target.getClass();

        Field f = secretClass.getDeclaredField("loanAmount");

        f.setAccessible(true);

        double result =  f.getDouble(target);
        System.out.println("The value in f (loanAmount) is " + f.get(target));
        assertEquals("The loan amount should be equal to",7,result,1.11);
    }

    /**
     * Accessing a private member
     * Test of period member, of class loan.
     */

    @Test
    public void TestSetPeriod() throws Exception {
        System.out.println("Test Period:");
        Loan target  = new Loan(7500, 2);
        Class secretClass = target.getClass();

        /*Retrieve the field age */
        Field f = secretClass.getDeclaredField("numberOfPayments");

        /* make sure the field is accessible. */
        f.setAccessible(true);

        /* get the value of the field */
        System.out.println("The value in f (period) is " + f.get(target));

        int result =  f.getInt(target);

        assertEquals("The time period should be equal", 2 * MONTHS,  result,1.11);

    }

    /**
     * Accessing a private member
     * Test of setPeriod method, of class loan.
     */

    @Test
    public void TestSetPeriod1() throws Exception {
        System.out.println("Test Period:");
        /* Set up a new loan */
        Loan target = new  Loan(1000, 5);

        /* get the setAge method details */
        Method method=  Loan.class.getDeclaredMethod("setPeriod", int.class);

        /* make the method accessible */
        method.setAccessible(true);

        /* invoke the method setPeriod with the value 7 */
        method.invoke(target, 5);

        /*access the field age and check its value is set to 7*/
        Class secretClass = target.getClass();

        Field f = secretClass.getDeclaredField("numberOfPayments");

        f.setAccessible(true);

        int result =  f.getInt(target);
        System.out.println("The value in f (numberOfPayments) is " + f.get(target));
        assertEquals("The time period should be equal", 5 * MONTHS,  result,1.11);
    }


    /**
     * Accessing a private member
     * Test of rate member, of class loan.
     */

    @Test
    public void TestSetRate() throws Exception {
        System.out.println("Test Rate:");
        Loan target  = new Loan(501, 4);
        Class secretClass = target.getClass();

        /*Retrieve the field age */
        Field f = secretClass.getDeclaredField("monthlyInterestRate");

        /* make sure the field is accessible. */
        f.setAccessible(true);

        /* get the value of the field */
        System.out.println("The value in f (monthlyInterestRate) is " + f.get(target));

        double result =  f.getDouble(target);
        assertEquals("The monthly interest rate should be equal", .005,  result,1.11);

    }

    /**
     * Accessing a private member
     * Test of setRate method, of class loan.
     */

    @Test
    public void TestSetRate1() throws Exception {
        System.out.println("Test Rate:");
        /* Set up a new loan */
        Loan target = new  Loan(9999, 1);

        /* get the setAge method details */
        Method method=  Loan.class.getDeclaredMethod("setRate", int.class);

        /* make the method accessible */
        method.setAccessible(true);

        /* invoke the method setRate with the value 7 */
        method.invoke(target, 7);

        /*access the field age and check its value is set to 7*/
        Class secretClass = target.getClass();

        Field f = secretClass.getDeclaredField("monthlyInterestRate");

        f.setAccessible(true);

        double result =  f.getDouble(target);
        System.out.println("The value in f (monthlyInterestRate) is " + f.get(target));
        assertEquals("The monthly interest rate should be equal to",.005,result,1.11);
    }
}


