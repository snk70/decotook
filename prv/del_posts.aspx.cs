﻿using System;
//using System.Collections.Generic;
//using System.Linq;
using System.Web;
using System.Data.SqlClient;
using System.IO;
//using System.Web.UI;
//using System.Web.UI.WebControls;

public partial class prv_del_posts : System.Web.UI.Page
{


    string host_address = "";
    protected void Page_Load(object sender, EventArgs e)
    {

        try
        {
            if (Session[Request.UserHostAddress].ToString() != Request.UserAgent.GetHashCode() + DateTime.Now.Hour.GetHashCode().ToString())
            {
                Session.RemoveAll();
                Response.Redirect("~/Error.html");
                return;
            }
        }
        catch
        {
            Session.RemoveAll();
            Response.Redirect("~/Error.html");
            return;
        }

        host_address = Request.Url.ToString().Replace(Request.RawUrl.ToString(), "");

        try
        {
            Request.QueryString["posttype"].ToString();
        }
        catch
        {
            Response.Redirect("~/Error.html");
        }
    }
    protected void btn_can_Click(object sender, EventArgs e)
    {
        Response.Redirect(Edit_Content_class.direct_URL);
    }
    protected void btn_yes_Click(object sender, EventArgs e)
    {
        SqlConnection con = new SqlConnection(Connectionst.ConnectionString_Main);
        con.Open();

        SqlCommand com1;



        if (Request.QueryString["posttype"].ToString() == "app")
        {
            //del_posts.aspx?r={0}&link={1}&img={2}&posttype=app
            Delete_full_Directory.Delete_DIR(MapPath("~/" + Edit_Content_class.Posts_link_Path + "/" + Request.QueryString["link"]));
            File.Delete(MapPath("~/" + Edit_Content_class.Header_IMG_Location + "/" + Request.QueryString["img"]));
            string url_post = Get_Path_in_Local_OR_Main.get("http://localhost/decotook/prv/dfgdfg_database/prdt_dfgsdfgsdfg.php", host_address + "/" + "prv/dfgdfg_database/prdt_dfgsdfgsdfg.php");
            post_get_information.MyWebRequest wm = new post_get_information.MyWebRequest(url_post, "POST", "sgsjkdgjsdfg=del&del_r=" + Request.QueryString["r"]);
            //Response.Write(Request.QueryString["r"]);
            //Response.Write(wm.GetResponse());
            //return;
            if (wm.GetResponse() == "ok")
            {
                com1 = new SqlCommand("Delete From tbl_products Where (r='" + Request.QueryString["r"] + "')", con);
                com1.ExecuteNonQuery();
            }
        }
        else if (Request.QueryString["posttype"].ToString() == "art")
        {
            Delete_full_Directory.Delete_DIR(MapPath("~/" + Edit_Content_class.Paper_link_Path + "/" + Request.QueryString["link"]));
            File.Delete(MapPath("~/" + Edit_Content_class.Header_IMG_Location + "/" + Request.QueryString["img"]));
            string url_post = Get_Path_in_Local_OR_Main.get("http://localhost/decotook/prv/dfgdfg_database/sdfasdfdsfasdf.php", host_address + "/" + "prv/dfgdfg_database/sdfasdfdsfasdf.php");
            post_get_information.MyWebRequest wm = new post_get_information.MyWebRequest(url_post, "POST", "sgsjkdgjsdfg=del&del_r=" + Request.QueryString["r"]);
            if (wm.GetResponse() == "ok")
            {
                com1 = new SqlCommand("Delete From tbl_papers Where (r='" + Request.QueryString["r"] + "')", con);
                com1.ExecuteNonQuery();
            }
        }

        con.Dispose();
        con.Close();

        Response.Redirect(Edit_Content_class.direct_URL);
    }
}