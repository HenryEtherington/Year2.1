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
    public partial class frmConnect : Form
    {
        public frmConnect()
        {
            InitializeComponent();
        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
          
            
        }

        private void frmConnect_Load(object sender, EventArgs e)
        {
            DataSet ds = new DataSet();
            dataGridView1.DataSource = Stock.getAllStock(ds).Tables["stk"];
        }
    }
}
