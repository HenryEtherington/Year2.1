using System;
using System.Data;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Oracle.ManagedDataAccess.Client;

namespace CS_Connect
{
    class Stock
    {
        //Instance variables

        private int  stock_No;
        private string descrpition;
        private decimal cost_price;
        private decimal sale_price;
        private int qty;
        private string status;
        private int v1;
        private string text;
        private int v2;
        private int v3;
        private int v4;

        //No argument constructor

        public Stock()
        {

            stock_No = 0;
            descrpition = "";
            cost_price = 0;
            sale_price = 0;
            qty = 0;
            status = "";

        }

        //Argument Constructor
        public Stock(int Sno, String Descrip, Decimal CostP, Decimal SaleP,
                     Int32 Qty, string Status)
        {


            stock_No = Sno;
            descrpition = Descrip;
            cost_price = CostP;
            sale_price = SaleP;
            qty = Qty;
            status = Status;


        }


        //Define setters

        public void setStockNo(int Stock_No)
        {
            this.stock_No = Stock_No;
        }

        public void setDescription(String Description)
        {
            this.descrpition = Description;
        }

        public void setCostPrice(decimal Cost_Price)
        {
            this.cost_price = Cost_Price;
        }



        public static DataSet getAllStock(DataSet ds)

        {
            //Creates an OracleConnection object using the conection string do
            OracleConnection conn = new OracleConnection(DBConnect.oradb);
            //conn.Open();

            //Define a SQL query to retrieve the data
            String strSQl = "Select * FROM Stock";

            //Create an OracleCommand object and instantiate it
            OracleCommand cmd = new OracleCommand(strSQl, conn);

            //Create an OracleAdapter to hold the result of the executed OracleCommand
            OracleDataAdapter da = new OracleDataAdapter(cmd);

            //fill the DataSet DS with query result
            da.Fill(ds, "stk");

            //close the DB connection
            conn.Close();

            //Return the DataSet with the required data to the windows form which executed this command
            return ds;

        }

      public void regStock()

        {

            //connect to database
            OracleConnection myConn = new OracleConnection(DBConnect.oradb);
            myConn.Open();

            String strSql = "INSERT INTO STOCK VALUES (" + this.stock_No.ToString() +
                            ",'" + this.descrpition.ToUpper() + "'," + this.cost_price + "," +
                            this.sale_price + "," + this.qty + ",'" + this.status + "')";

            //Execute the command
            OracleCommand cmd = new OracleCommand(strSql, myConn);
            cmd.ExecuteNonQuery();

            //close DB connection
            myConn.Close();
                 
        }

        public static int getNextStockNo()
        {

            int intNextStockNo = 1;

            //Connect to DB
            OracleConnection Conn = new OracleConnection(DBConnect.oradb);
            Conn.Open();

            //Delete SQL query
            String strSQl = "Select Max(stockNo) FROM Stock";

            //Create oracle command
            OracleCommand cmd = new OracleCommand(strSQl, myConn);


            //Execute query using DataRecorder
            OracleDataReader dr = cmd.ExecuteReader();

            //check value returned
            dr.Read();


            //If null return a 1 or return value in DataRecorder
            if (dr.IsDBNull(0))
            {

                intNextStockNo = 1;
            }

            else
                intNextStockNo = Convert.ToInt32(dr.GetValue(0)) + 1;

            //Close DB
            myConn.Close();

            //return next StockNo
            return intNextStockNo;
        }

    }
}
