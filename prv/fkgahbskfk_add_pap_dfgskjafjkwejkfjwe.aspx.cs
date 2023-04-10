using System;
using System.Globalization;
using System.Data.SqlClient;
using System.IO;

//مطالب
public partial class prv_fkgahbskfk_add_pap_dfgskjafjkwejkfjwe : System.Web.UI.Page
{
    string r_F = "Null", r_paper = "", up_img = "", Body_Source = "";

    string top_path;

    bool edi = false;
    string host_address;

    DataSet1TableAdapters.tbl_papersTableAdapter tb = new DataSet1TableAdapters.tbl_papersTableAdapter();


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
            #region    //لود برای ویرایش است
            if (prp_title.Text == "")
            {
                r_paper = Request.Form["rp"].ToString();

                edi = true;
                Session["edi"] = 1;

                lbl_link.Visible = false;
                paper_link.Visible = false;

                r_F = "'" + r_paper + "'";

                btn_publish.Text = "تأیید و ویرایش مطلب";
                SqlConnection con2 = new SqlConnection(Connectionst.ConnectionString_Main);
                con2.Open();
                SqlCommand com2 = new SqlCommand("Select * From tbl_papers Where(r='" + r_paper + "')", con2);
                SqlDataReader dr2 = com2.ExecuteReader();
                dr2.Read();

                prp_title.Text = dr2["title"].ToString();
                meta_key.Text = dr2["meta_title"].ToString();
                meta_desc.Text = dr2["meta_desc"].ToString();
                paper_cmt.Text = dr2["paper_cmt"].ToString();
                paper_link.Text = dr2["paper_link"].ToString();
                cate_titlr.Text = dr2["cate_title"].ToString();
                editor_text_body.Text = dr2["text_boy"].ToString().Replace("img_special_url_address_pic", host_address + "/" + Edit_Content_class.Paper_link_Path + "/" + paper_link.Text);

                Session["img"] = up_img = dr2["img"].ToString();

                com2.Dispose();
                con2.Dispose();
                con2.Close();
                try
                {
                    if (Session["rp"].ToString() == "")
                    {
                        Session["rp"] = r_paper;
                    }
                    else
                    {
                        Session["rp"] = r_paper;
                    }
                }
                catch
                {
                    Session["rp"] = r_paper;
                }
            }
            #endregion
        }
        catch
        {
            #region   //لود برای حالت معمولی و درج مطلب است
            Session["edi"] = 0;
            edi = false;
            try
            {
                SqlConnection con1 = new SqlConnection(Connectionst.ConnectionString_Main);
                con1.Open();
                SqlCommand com1 = new SqlCommand("SELECT MAX(r) FROM tbl_papers", con1);
                SqlDataReader dr1 = com1.ExecuteReader();
                dr1.Read();
                r_paper = Convert.ToString(Convert.ToInt32(dr1[0]) + 1);
                com1.Dispose();
                con1.Dispose();
                con1.Close();
            }
            catch
            {
                r_paper = "1";
            }

            try
            {
                if (Session["rp"].ToString() == "")
                {
                    Session["rp"] = r_paper;
                }
                else
                {
                    Session["rp"] = r_paper;
                }
            }
            catch
            {
                Session["rp"] = r_paper;
            }

            #endregion
        }
    }



    protected void Button1_Click(object sender, EventArgs e)
    {

        top_path = "<a class=\"pt3 fl_r\" href=\"../../index.php\">صفحه اصلی&ensp;</a><a class=\"pt3 fl_r\">/&ensp;</a><a href=\"../../paper.php\" class=\"pt3 fl_r\">مطالب&ensp;</a><a class=\"pt3 fl_r\">&ensp;/&ensp;</a><a href=\"#\" class=\"pt3 fl_r\">" + prp_title.Text + "</a>";


        r_paper = Session["rp"].ToString();

        #region //اگر مطلب برای ویرایش بود
        if (Session["edi"].ToString() == "1")
        {
            up_img = Session["img"].ToString();

            Session["edi"] = 0;
            string url_post = Get_Path_in_Local_OR_Main.get("http://localhost/decotook/prv/dfgdfg_database/sdfasdfdsfasdf.php", host_address + "/" + "prv/dfgdfg_database/sdfasdfdsfasdf.php");

         


            if (img_Upload.HasFile == true)
            {
                up_img = Session["img"].ToString();
                try
                {
                    File.Delete(MapPath("~/" + Edit_Content_class.Header_IMG_Location + "/" + up_img));
                }
                catch
                { }
                up_img = img_Upload.FileName.ToString();
                Heade_IMG_Name();
                img_Upload.SaveAs(MapPath("~/" + Edit_Content_class.Header_IMG_Location + "/" + up_img));
            }

            post_get_information.MyWebRequest wm = new post_get_information.MyWebRequest(url_post, "POST", "sgsjkdgjsdfg=del&del_r=" + Session["rp"].ToString() + "");

            if (wm.GetResponse() == "ok")
            {
                try
                {
                    File.Delete(MapPath("~/" + Edit_Content_class.Paper_link_Path + "/" + paper_link.Text + "/index.php"));
                }
                catch { }
                Clear_vain_Image();


                PersianCalendar pc = new PersianCalendar();
                string dt = pc.GetYear(DateTime.Now) + "/" + pc.GetMonth(DateTime.Now) + "/" + pc.GetDayOfMonth(DateTime.Now);
                string tm = DateTime.Now.Hour.ToString() + ":" + DateTime.Now.Minute.ToString();


                post_get_information.MyWebRequest wm2 = new post_get_information.MyWebRequest(url_post, "POST", "r='" + Session["rp"].ToString() + "'&cate_title=" + cate_titlr.Text + "&title=" + prp_title.Text + "&date=" + dt + "&time=" + tm + "&comment_code=" + "" + "&paper_cmt=" + paper_cmt.Text + "&paper_link=" + paper_link.Text + "&img=" + up_img + "&sgsjkdgjsdfg=sdgsdfgsirdgenrgernger");


                DataSet1 ds = new DataSet1();

                tb.Fill(ds.tbl_papers);


                if (wm2.GetResponse() == "ok")
                {

                    editor_text_body.Text = editor_text_body.Text.Replace(host_address + "/" + Edit_Content_class.Paper_link_Path + "/" + paper_link.Text, "img_special_url_address_pic");
                    tb.UpdateQuery(cate_titlr.Text, prp_title.Text, editor_text_body.Text, dt, tm, auther_name.Text, auther_pic.Text, auther_title.Text, "art_" + Session["rp"].ToString(), "", "", "", "", meta_key.Text, meta_desc.Text, paper_cmt.Text, paper_link.Text, up_img, 0, int.Parse(Session["rp"].ToString()));
                    editor_text_body.Text = editor_text_body.Text.Replace("img_special_url_address_pic/", "");
                    Body_Source = File.ReadAllText(MapPath("~/" + Edit_Content_class.Body_Source_path)).Replace("cmt_code_deco", "art_" + Session["rp"].ToString()).Replace("title_paper_sina", prp_title.Text).Replace("descryption_paper_sina", meta_desc.Text).Replace("keywords_paper_sina", meta_key.Text).Replace("text_body_sina_sdfgkjbkln_1379", editor_text_body.Text).Replace("paper_product_path_link", top_path);
                    File.WriteAllText(MapPath("~/" + Edit_Content_class.Paper_link_Path + "/" + paper_link.Text + "/index.php"), Body_Source);
                    Session.RemoveAll();
                    Session[Request.UserHostAddress] = Request.UserAgent.GetHashCode() + DateTime.Now.Hour.GetHashCode().ToString();
                    Response.Redirect(Edit_Content_class.direct_URL);
                }
                else
                {
                    Response.Redirect("~/Error.html");
                }

            }

        }
        #endregion

        #region //اگر مطلب برای درج کردن جدید بود
        else if (Session["edi"].ToString() == "0")
        {

            if (img_Upload.HasFile && paper_link.Text != "")
            {
                up_img = img_Upload.FileName.ToString();
                Heade_IMG_Name();

                Body_Source = File.ReadAllText(MapPath("~/" + Edit_Content_class.Body_Source_path));

                PersianCalendar pc = new PersianCalendar();
                string dt = pc.GetYear(DateTime.Now) + "/" + pc.GetMonth(DateTime.Now) + "/" + pc.GetDayOfMonth(DateTime.Now);
                string tm = DateTime.Now.Hour.ToString() + ":" + DateTime.Now.Minute.ToString();


                string url_post = Get_Path_in_Local_OR_Main.get("http://localhost/decotook/prv/dfgdfg_database/sdfasdfdsfasdf.php", host_address + "/" + "prv/dfgdfg_database/sdfasdfdsfasdf.php");
                post_get_information.MyWebRequest wm = new post_get_information.MyWebRequest(url_post, "POST", "r='" + Session["rp"].ToString() + "'&cate_title=" + cate_titlr.Text + "&title=" + prp_title.Text + "&date=" + dt + "&time=" + tm + "&comment_code=" + "" + "&paper_cmt=" + paper_cmt.Text + "&paper_link=" + paper_link.Text + "&img=" + up_img + "&sgsjkdgjsdfg=sdgsdfgsirdgenrgernger");

                DataSet1 ds = new DataSet1();

                tb.Fill(ds.tbl_papers);


                if (wm.GetResponse() == "ok" && File.Exists(MapPath("~/" + Edit_Content_class.Header_IMG_Location + "/" + up_img)) == false)
                {
                    editor_text_body.Text = editor_text_body.Text.Replace(host_address + "/" + Edit_Content_class.Paper_link_Path + "/" + paper_link.Text, "img_special_url_address_pic");
                    tb.InsertQuery(cate_titlr.Text, prp_title.Text, editor_text_body.Text, dt, tm, auther_name.Text, auther_pic.Text, auther_title.Text, "", "", "", "", "", meta_key.Text, meta_desc.Text, paper_cmt.Text, paper_link.Text, up_img, 0);
                    editor_text_body.Text = editor_text_body.Text.Replace("img_special_url_address_pic/", "");
                    Directory.CreateDirectory(MapPath("~/" + Edit_Content_class.Paper_link_Path + "/" + paper_link.Text));
                    Body_Source = File.ReadAllText(MapPath("~/" + Edit_Content_class.Body_Source_path)).Replace("cmt_code_deco", "art_" + Session["rp"].ToString()).Replace("title_paper_sina", prp_title.Text).Replace("descryption_paper_sina", meta_desc.Text).Replace("keywords_paper_sina", meta_key.Text).Replace("text_body_sina_sdfgkjbkln_1379", editor_text_body.Text).Replace("paper_product_path_link", top_path);
                    File.WriteAllText(MapPath("~/" + Edit_Content_class.Paper_link_Path + "/" + paper_link.Text + "/index.php"), Body_Source);

                    img_Upload.SaveAs(MapPath("~/" + Edit_Content_class.Header_IMG_Location + "/" + up_img));
                    Session.RemoveAll();
                    Session[Request.UserHostAddress] = Request.UserAgent.GetHashCode() + DateTime.Now.Hour.GetHashCode().ToString();
                    Response.Redirect(Edit_Content_class.direct_URL);
                }
                else
                {
                    Response.Redirect("~/Error.html");
                }
            }
        }
        #endregion


    }

    void Heade_IMG_Name()
    {
        if (File.Exists(MapPath("~/" + Edit_Content_class.Header_IMG_Location + "/" + up_img)) == true)
        {


            up_img = DateTime.Now.Year.ToString() + "_" + up_img;
            if (File.Exists(MapPath("~/" + Edit_Content_class.Header_IMG_Location + "/" + up_img)) == true)
            {
                up_img = DateTime.Now.Second.ToString() + "_" + up_img;
                Heade_IMG_Name();
            }
        }
    }

    protected void add_pic_Click(object sender, EventArgs e)
    {
        if (paper_link.Text != "" && Directory.Exists(MapPath("~/posts/" + paper_link.Text)) == false || Directory.Exists(MapPath("~/posts/" + paper_link.Text)) == true && Session["edi"].ToString() == "1")
        {

            Directory.CreateDirectory(MapPath("~/" + Edit_Content_class.Paper_link_Path + "/" + paper_link.Text));
            edi_add.SaveAs(MapPath("~/" + Edit_Content_class.Paper_link_Path + "/" + paper_link.Text + "/" + edi_add.FileName));

            editor_text_body.Text += "<img class=\"e-w\" alt=\"\" src=\"" + host_address + "/" + Edit_Content_class.Paper_link_Path + "/" + paper_link.Text + "/" + edi_add.FileName + "\">";
        }
    }


    void Clear_vain_Image()
    {
        string[] images_path = Directory.GetFiles(MapPath("~/" + Edit_Content_class.Paper_link_Path + "/" + paper_link.Text));
        string image_Name = "";

        for (int x = 0; x < images_path.Length; x++)
        {
            image_Name = images_path[x].Replace(MapPath("~/" + Edit_Content_class.Paper_link_Path + "/" + paper_link.Text + "/"), "");
            if (editor_text_body.Text.IndexOf(image_Name) == -1)
            {
                File.Delete(images_path[x]);
            }
        }
    }

    protected void btn_cp_Click(object sender, EventArgs e)
    {
        Response.Redirect(Edit_Content_class.direct_URL);
    }
    protected void products_Click(object sender, EventArgs e)
    {
        Response.Redirect(Edit_Content_class.direct_URL);
    }
}