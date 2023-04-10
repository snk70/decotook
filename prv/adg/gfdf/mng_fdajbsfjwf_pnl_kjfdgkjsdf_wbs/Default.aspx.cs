using System;
using System.IO;
using System.Data.SqlClient;
//using System.Collections.Generic;
//using System.Linq;
//using System.Web;
//using System.Web.UI;
//using System.Web.UI.WebControls;

public partial class prv_bdsgsdfgsdfg_dsdfgsdfgsdfgsdfgsdfg_mng_pnl_wbs_adsjkfasf_Default : System.Web.UI.Page
{
    string host_address;

    protected void Page_Load(object sender, EventArgs e)
    {
        host_address = Request.Url.ToString().Replace(Request.RawUrl.ToString(), "");

        try
        {
            if (Session[Request.UserHostAddress].ToString() == Request.UserAgent.GetHashCode() + DateTime.Now.Hour.GetHashCode().ToString())
            {
                correct_info(true);
            }
            else
            {
                correct_info(false);
            }
        }
        catch
        {
            correct_info(false);
        }
    }

    protected void Button1_Click(object sender, EventArgs e)
    {
        if ((txt_username.Text == "Ehsan" || txt_username.Text == "Sina" || txt_username.Text == "Elham" || txt_username.Text == "Mohammad" || txt_username.Text == "Hossein" || txt_username.Text == "Zahra") && txt_pass.Text == "20ezm17")
        {
            correct_info(true);
            Response.Write("<p class=\"right\">سلام " + txt_username.Text + "</p>");

        }
        else
        {
            Session.RemoveAll();
            Response.Redirect("~/Error.html");
        }

    }

    void correct_info(bool inf)
    {
        if (inf == true)
        {

            Session[Request.UserHostAddress] = Request.UserAgent.GetHashCode() + DateTime.Now.Hour.GetHashCode().ToString();
            btn_Exit.Visible = true;
            Button1.Visible = false;
            txt_username.Visible = false;
            txt_pass.Visible = false;
            btn_insert_app.Visible = true;
            btn_insert_art.Visible = true;
            btn_comments.Visible = true;
            btn_pap_cat.Visible = true;
            btn_prd_cat.Visible = true;
            btn_link.Visible = true;
            btn_refresh_sitemap.Visible = true;

        }
        else if (inf == false)
        {
            btn_Exit.Visible = false;
            Button1.Visible = true;
            txt_username.Visible = true;
            txt_pass.Visible = true;
            btn_insert_app.Visible = false;
            btn_insert_art.Visible = false;
            btn_comments.Visible = false;
            btn_pap_cat.Visible = false;
            btn_prd_cat.Visible = false;
            btn_link.Visible = false;
            btn_refresh_sitemap.Visible = false;
            Session.RemoveAll();
        }

    }


    protected void btn_refresh_sitemap_Click(object sender, EventArgs e)
    {
        #region //بروز رسانی سایت مپ
        string sitemap_TXT = File.ReadAllText(MapPath("~/prv/cnfg_DSFg/sadfasdf.xml"));
        try
        {
            File.Delete(MapPath("~/sitemap.xml"));
        }
        catch
        { }

        SqlConnection con1 = new SqlConnection(Connectionst.ConnectionString_Main);
        con1.Open();

        SqlCommand com1 = new SqlCommand("Select * from tbl_papers", con1);


        SqlDataReader dr1 = com1.ExecuteReader();

        while (dr1.Read())
        {
            sitemap_TXT += "\n" + "<url>" + "\n" + "  <loc>" + host_address + "/" + Edit_Content_class.Paper_link_Path + "/" + dr1["paper_link"] + "</loc>" + "\n" + "<priority>0.90</priority>" + "\n" + "</url>";
        }

        com1.Dispose();
        com1 = new SqlCommand("Select * from tbl_products", con1);
        dr1.Dispose();
        dr1 = com1.ExecuteReader();

        while (dr1.Read())
        {
            sitemap_TXT += "\n" + "<url>" + "\n" + "  <loc>" + host_address + "/" + Edit_Content_class.Posts_link_Path + "/" + dr1["paper_link"] + "</loc>" + "\n" + "<priority>0.90</priority>" + "\n" + "</url>";
        }

        sitemap_TXT += "\n" + "</urlset>";

        con1.Dispose();
        con1.Close();

        File.WriteAllText(MapPath("~/sitemap.xml"), sitemap_TXT);
        #endregion
    }
    protected void btn_refresh_Click(object sender, EventArgs e)
    {
        Response.Redirect("~/prv/cnfg_DSFg/sli_dfgsdf.aspx");

    }
    protected void btn_insert_art_Click(object sender, EventArgs e)
    {
        Response.Redirect("~/prv/fkgahbskfk_add_pap_dfgskjafjkwejkfjwe.aspx");
    }
    protected void btn_insert_app_Click(object sender, EventArgs e)
    {
        Response.Redirect("~/prv/asdfasdf_add_prd_fdkl.aspx");
    }
    protected void btn_Exit_Click(object sender, EventArgs e)
    {
        Session.RemoveAll();
        Response.Redirect(Edit_Content_class.direct_URL);
    }
    protected void btn_refresh_menu_Click(object sender, EventArgs e)
    {
        RemotePostData.RemotePost rmt = new RemotePostData.RemotePost(host_address + "/prv/Content _tools_dfgkdk/Default.aspx");
        rmt.Add("type", "menu");
        rmt.Post();
    }
    protected void btn_edit_menu_Click(object sender, EventArgs e)
    {
        Response.Redirect("~/prv/sdfasdfaskdfasdf_side_adfsasdfjkflkgfbwempk_menu.aspx");
    }
    protected void btn_comments_Click(object sender, EventArgs e)
    {
        Response.Redirect("~/prv/cnfg_DSFg/adffs_comments_fdg.php");
    }
    protected void btn_prd_cat_Click(object sender, EventArgs e)
    {
        Response.Redirect("~/prv/cnfg_DSFg/cat_prd_dfgsdfgsdfgsdg.php");
    }
    protected void btn_pap_cat_Click(object sender, EventArgs e)
    {
        Response.Redirect("~/prv/cnfg_DSFg/cat_dfkgsdkfjjksdfgsdfjg.php");
    }
}