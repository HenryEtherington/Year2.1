using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace CS_Connect
{
    public partial class frmRegStock : Form
    {
        public frmRegStock()
        {
            InitializeComponent();
        }

        private void frmRegStock_Load(object sender, EventArgs e)
        {
            txtStockNo.Text = Stock.getNextStockNo().ToString("00000");
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void btnReg_Click(object sender, EventArgs e)
        {
            //Validate Data

            //insert data into stock table

            Stock newStock = new Stock(Convert.ToInt32(txtStockNo.Text), txtDescription.Text, Convert.ToInt32 (txtCost.Text), Convert.ToInt32(txtSale.Text), Convert.ToInt32(txtQty.Text),"A");

            newStock.regStock();

            //display confirmation message
            MessageBox.Show("Stock number " + txtStockNo.Text + " was added");

            //reset UI
            txtDescription.Clear();
            txtCost.Clear();
            txtSale.Clear();
            txtQty.Clear();

            txtStockNo.Text = Stock.getNextStockNo().ToString("00000");

        }
    }
}
